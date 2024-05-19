<?php

/******************************************************************************
 * This script implements single sign-on for a user registered within one
 * of the partner SSO providers, such as Okta
 ******************************************************************************/

// the flow redirects back to this page, so need to restart session and includes
session_start();
include_once './config.php';
include_once './dbconnect.php';

// if you have a code and matching state, you have a good auth response
if (isset($_GET['code'])) {
  // verify the state matches our stored state
  if (!isset($_GET['state']) || $_GET['state'] != $_SESSION['oauth_state']) {
    echo "Error: state values do not match<br>";
    die();
  }
  echo "You have successfully retrieved an Authorization Code from Okta.<br><br>";
  echo "Code:  " . $_GET['code']  . "<br>";
  echo "State: " . $_GET['state'] . "<br>";

  // now you can exchange the auth code for access and ID tokens
  $rc = getOktaTokens();

  if ($rc) {
    echo "Token Request Successful<br><br>";

    $rc = getProfile($connection);

    if ($rc) {
      echo "User Profile Values added to Session<br>";
      echo "<br>Session Values<br>";
      echo "------------------<br>";

      foreach ($_SESSION as $key => $value) {
        echo $key . ": " . $value . "<br>";
      }

      // regular version without pause
      // print("<script>function getHome() { window.location = '/avwhims/dashboard/'; } </script>");
      // print("<script>getHome();</script>");

      // debug version with pause
      print("<h3><a class='btn' href='/avwhims/dashboard/'>Continue to Site</a></h3>");
    } else {
      echo "getProfile function Unsuccessful";
      die();
    }
  } else {
    echo "Token Request Unsuccessful";
    die();
  }
} else {
  echo "You do not have an Authorization Code from Okta.<br>";
  echo "Code:  " . $_GET['code'] . "<br>";
  echo "State: " . $_GET['state'] . "<br>";

  // If you do not yet have an authorization code, script flows through to this section to start the process by
  // requesting a code. On subsequent redirect, should be good to continue with request to exchange for tokens.

  getOktaAuthCode();
}

/******************************************************************************
 * initial flow to request/receive authorization code
 ******************************************************************************/
function getOktaAuthCode()
{
  // Generate a random hash and store in the session superglobal
  $_SESSION['oauth_state'] = bin2hex(random_bytes(16));

  echo "02 sso.php - OAuth State: " . $_SESSION['oauth_state'] . "<br>";

  // define the authorization endpoint
  $authorization_endpoint = OKTA_OAUTH2_ISSUER . '/v1/authorize';

  echo "Authorization Endpoint: " . $authorization_endpoint . "<br>";

  // Create request parameters to be included in the header as a query string
  $params = array(
    'response_type' => 'code',
    'client_id' => OKTA_OAUTH2_CLIENT_ID,
    'state' => $_SESSION['oauth_state'],
    'redirect_uri' => OKTA_OAUTH2_REDIRECT_URI,
    'scope' => 'openid profile email',
  );

  $authorize_url = $authorization_endpoint . '?' . http_build_query($params);

  // Redirect user to Okta authorization page
  header('Location: ' . $authorize_url);
  die();
}

/******************************************************************************
 * exchange authorization code for access and id tokens
 ******************************************************************************/
function getOktaTokens()
{
  // initialize a curl session and return a handle to the session
  $ch = curl_init();

  // set a few curl options using an associative array
  curl_setopt_array($ch, [
    CURLOPT_URL => OKTA_OAUTH2_TOKEN_URL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => http_build_query([
      'grant_type' => 'authorization_code',
      'client_id' => OKTA_OAUTH2_CLIENT_ID,
      'client_secret' => OKTA_OAUTH2_CLIENT_SECRET,
      'redirect_uri' => OKTA_OAUTH2_REDIRECT_URI,
      'code' => $_GET['code']
    ])
  ]);

  // execute the request and set return string response to a variable
  $response = curl_exec($ch);
  $response_json = json_decode($response, true);

  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  echo "<br>Curl Status Code: " . $status_code . "<br><br>";
  // echo "Curl Response: <br>" . $response . "<br><br>";

  // pull values out of the response and store as session variables
  $_SESSION['token_type'] = $response_json['token_type'];
  $_SESSION['expires_in'] = $response_json['expires_in'];
  $_SESSION['access_token'] = $response_json['access_token'];
  $_SESSION['scope'] = $response_json['scope'];
  $_SESSION['id_token'] = $response_json['id_token'];

  // split JWT string into three parts
  $jwt = explode('.', $response_json['id_token']);

  // extract the middle part, base64 decode, then json_decode it
  $userinfo = json_decode(base64_decode($jwt[1]), true);

  $_SESSION['user_id'] = $userinfo['sub'];
  $_SESSION['email'] = $userinfo['email'];

  curl_close($ch);

  return true;
}

/******************************************************************************
 * get user profile values from database and load into session superglobal
 ******************************************************************************/
function getProfile($dbconnection)
{
  // build SELECT query based on email address provided by Okta
  $query_email = "SELECT * FROM user_account WHERE email_address='" . $_SESSION['email'] . "'";

  // Run SELECT query	against user_account
  $result = mysqli_query($dbconnection, $query_email);
  if (!$result) {
    die('Select Query Failed: ' . mysqli_connect_error());
  } else {
    print("Select Query Successful <br><br>");
    // die("<br />Terminating program </body></html>"); 
  }

  // Get Value from selected row		
  $row1 = mysqli_fetch_array($result);
  if (!$row1) {
    print("No Rows Found" . mysqli_connect_error() . "<br><br>");
  } else {
    print("Row Found: ");
    print($row1['id'] . " | " . $row1['username'] . " | " . $row1['password']  . " | " . $row1['email_address'] . "<br><br>");
    // die("<br />Terminating program </body></html>");
  }

  // store session data
  $_SESSION['user_id'] = $row1['id'];
  $_SESSION['user_name'] = $row1['username'];

  // build SELECT query for station_id and favorite color from profile
  $query_profile = "SELECT * FROM user_profile WHERE user_account_id='" . $_SESSION['user_id'] . "'";

  // Run SELECT query	against user_profile
  $result = mysqli_query($dbconnection, $query_profile);
  if (!$result) {
    die('Select Query Failed: ' . mysqli_connect_error());
  } else {
    print("Select Query Successful <br><br>");
    // die("<br />Terminating program </body></html>");
  }

  // Get Value from selected row		
  $row2 = mysqli_fetch_array($result);
  if (!$row2) {
    print("No Rows Found" . mysqli_connect_error() . "<br><br>");
  } else {
    print("Row Found: ");
    print($row2['firstname'] . " | " . $row2['lastname'] . " | " . $row2['station_id']  . " | " . $row2['favorite_color'] . "<br><br>");
  }

  // store session data
  $_SESSION['station_id'] = $row2['station_id'];
  $_SESSION['profile_picture'] = $row2['profile_picture'];

  return true;
}
