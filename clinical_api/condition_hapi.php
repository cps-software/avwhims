<?php

/******************************************************************************
 * HAPI FHIR Test Server > GET Condition using patient ID
 * 
 * Attempting query HAPI FHIR Test Server to get Condition Resource response
 ******************************************************************************/

// the flow redirects back to this page, so need to restart session and includes
session_start();
include_once "../_include/config.php";
include_once "../_include/dbconnect.php";

// if we have an authorization code and matching state, we have a good auth response
if (isset($_GET['code'])) {
  echo "Here's the auth code we got: " . $_GET['code'] . "<br>";
  echo "Here's the state we set: " . $_SESSION['phapi_oauth_state'] . "<br>";
  // verify the state matches our stored state
  if (!isset($_GET['state']) || $_GET['state'] != $_SESSION['phapi_oauth_state']) {
    echo "<br>Error: state values do not match<br>";
    die();
  }
  echo "<br>You have successfully retrieved an Authorization Code from Lighthouse.<br><br>";
  echo "Code:  " . $_GET['code'] . "<br>";
  echo "State: " . $_GET['state'] . "<br>";

  // now we can exchange the auth code for access and ID tokens
  // $rc = getPhapiTokens(); we'll create this later

} else {
  echo "You do not have an Authorization Code from Lighthouse.<br>";
  echo "Code:  " . $_GET['code']  . "<br>";
  echo "State: " . $_GET['state'] . "<br><br>";

  // If you do not yet have auth code, script flows through to request code.
  // On subsequent redirect, should be good to continue with request to exchange for tokens.

  getChapiAuthCode();
}

/******************************************************************************
 * initial flow to request/receive PHAPI authorization code
 ******************************************************************************/
function getChapiAuthCode()
{
  // generate random hash and store in session superglobal
  $_SESSION['chapi_oauth_state'] = bin2hex(random_bytes(16));

  echo "[01] condition.php - getChapiCode() - OAuth State: " . $_SESSION['chapi_oauth_state'] . "<br>";

  // define authorization endpoint
  $chapi_oauth2_authorization_endpoint = CHAPI_OAUTH2_AUTHORIZATION_ENDPOINT;

  echo "[02] condition.php - getChapiCode() - Authorization Endpoint: " . $chapi_oauth2_authorization_endpoint . "<br>";

  // create request query parameters to be included in GET request url string
  $params = array(
    'client_id'     => CHAPI_OAUTH2_CLIENT_ID,
    'redirect_uri'  => CHAPI_OAUTH2_REDIRECT_URI,
    'response_type' => 'code',
    'scope'         => 'profile openid offline_access fhirUser launch patient/Condition.read patient/MedicationDispense.read patient/MedicationRequest.read patient/Observation.read patient/Patient.read patient/Practitioner.read',
    'state'         => $_SESSION['chapi_oauth_state']
  );

  $chapi_authorize_url = $chapi_oauth2_authorization_endpoint . '?' . http_build_query($params);

  echo "CHAPI Authorization URL: " . $chapi_authorize_url . "<br>";

  // redirect user to CHAPI authorization page
  header('Location: ' . $chapi_authorize_url);
  die;

  // Note: this API is for patient-facing applications
  // Patient, e.g., veteran, must provide approval for personal data access
  // So, will have to circle back on this later
}
