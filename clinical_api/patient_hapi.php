<?php

/**********************************************************************
 * Get Patient Data from HAPI FHIR Test Server
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include database server and avdrms database connection include file
include "../_include/dbconnect.php";

$test_patient_id = "596764";
$patient_array = get_patient_hapi($test_patient_id);

// parse a few values from the patient associative array
$resource_type = $patient_array['resourceType'];
$id = $patient_array['id'];
$given_name = $patient_array['name'][0]['given'][0];
$family_name = $patient_array['name'][0]['family'];
$gender = $patient_array['gender'];
$birth_date = $patient_array['birthDate'];
$street_address = $patient_array['address'][0]['line'][0];
$city = $patient_array['address'][0]['city'];
$state = $patient_array['address'][0]['state'];
$zipcode = $patient_array['address'][0]['postalCode'];
$country = $patient_array['address'][0]['country'];
$phone_number = $patient_array['telecom'][0]['value'];
$phone_type = $patient_array['telecom'][0]['use'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AV WHIMS Web Application">
  <meta name="author" content="csylvester">
  <link rel="shortcut icon" href="../_image/star-logo.png">
  <!-- link in fontawesome (minified version)-->
  <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
  <link rel="stylesheet" href="../_style/main.css">
  <link rel="stylesheet" href="../_style/log.css">
  <link rel="stylesheet" href="../_style/provider.css">
  <title>Women's Health</title>
</head>

<body>
  <?php
  // include module icon bar (lefthand side vertical area)
  include "../_include/module.php";
  ?>

  <!-- lefthand side navigation area (to right of module icon bar) -->
  <nav id="nav">
    <div class="nav-title">
      <h2>Women's Health</h2>
      <h3>Clinical Health API</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li class="nav-active"><a href="./patient_hapi.php">Patient (hapi)</a></li>
      <li><a href="./condition_chapi.php">Condition (chapi)</a></li>
      <li><a href="./condition_hapi.php">Condition (hapi)</a></li>
      <li><a href="./allergyIntollerance.php">AllergyIntollerance</a></li>
      <li><a href="#">MedicationDispense</a></li>
      <li><a href="#">MedicationRequest</a></li>
      <li><a href="#">Observation</a></li>
      <li><a href="#">Patient</a></li>
      <li><a href="#">Practitioner</a></li>
    </ul>
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Clinical Health API&nbsp;&nbsp;/&nbsp;&nbsp;Patient</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Patient (hapi)</h2>
      <br>
      <hr>
      <h3>https://hapi.fhir.org/baseR4/Patient/596764</h3>
      <?php
      echo "<pre>";
      echo "                 Resource Type: " . $resource_type . "<br>";
      echo "                            ID: " . $id . "<br><br>";
      echo "                    Given Name: " . $given_name . "<br>";
      echo "                   Family Name: " . $family_name . "<br><br>";
      echo "                        Gender: " . $gender . "<br>";
      echo "                    Birth Date: " . $birth_date . "<br><br>";
      echo "                Street Address: " . $street_address . "<br>";
      echo "                          City: " . $city . "<br>";
      echo "                         State: " . $state . "<br>";
      echo "                       Zipcode: " . $zipcode . "<br>";
      echo "                       Country: " . $country . "<br><br>";
      echo "                  Phone Number: " . $phone_number . "<br>";
      echo "                    Phone Type: " . $phone_type . "<br>";
      echo "</pre>";
      ?>
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/log.js"></script>
</body>

</html>

<?php
/************************************************************************
 * Get Patient HAPI ===> working on this function <===
 ************************************************************************/

function get_patient_hapi($patient_id)
{
  define('HAPI_PATIENT_BASE_URL', 'https://hapi.fhir.org/baseR4/Patient/');
  define('HEADER', ['Content-Type: text/html']);

  $full_url = HAPI_PATIENT_BASE_URL . $patient_id;

  // initiate a curl session and return a handle to the session
  $ch = curl_init();

  //set a few curl options using an associative array
  curl_setopt_array($ch, [
    CURLOPT_URL => $full_url,
    CURLOPT_HTTPHEADER => HEADER,
    CURLOPT_RETURNTRANSFER => true
  ]);

  $curl_response = curl_exec($ch);
  $response_json = json_decode($curl_response, true);

  curl_close($ch);
  return $response_json;
}
?>