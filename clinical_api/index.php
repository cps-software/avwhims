<?php

/**********************************************************************
 * Women's Health Module: Clinical Health API
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include database server and avdrms database connection include file
include "../_include/dbconnect.php";

// Add reference to get_metadata() function
require "./get_metadata.php";

$metadata_array = get_metadata();

// parse a few values from the metadata associative array
$openapi_version = $metadata_array['openapi'];
$title = $metadata_array['info']['title'];
$description = $metadata_array['info']['description'];

$server_sandbox_url = $metadata_array['servers'][0]['url'];
$server_sandbox_description = $metadata_array['servers'][0]['description'];
$server_sandbox_version_default = $metadata_array['servers'][0]['variables']['version']['default'];

$oauth_flow_sandbox_type = $metadata_array['components']['securitySchemes']['OauthFlowSandbox']['type'];
$oauth_flow_sandbox_in = $metadata_array['components']['securitySchemes']['OauthFlowSandbox']['in'];
$oauth_flow_sandbox_authorization_url = $metadata_array['components']['securitySchemes']['OauthFlowSandbox']['flows']['authorizationCode']['authorizationUrl'];
$oauth_flow_sandbox_token_url = $metadata_array['components']['securitySchemes']['OauthFlowSandbox']['flows']['authorizationCode']['tokenUrl'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AV WHIMS Web Application">
  <meta name="author" content="csylvester">
  <link rel="shortcut icon" href="../_resource/image/star-logo.png">
  <!-- link in fontawesome (minified version)-->
  <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
  <link rel="stylesheet" href="../_resource/style/main.css">
  <link rel="stylesheet" href="../_resource/style/log.css">
  <link rel="stylesheet" href="../_resource/style/provider.css">
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
      <li><a href="./patient_hapi.php">Patient (hapi)</a></li>
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
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Clinical Health API</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Clinical Health API</h2>
      <br>
      <hr>
      <h3>Metadata</h3>
      <?php
      echo "<pre>";
      echo "                       OpenAPI Version: " . $openapi_version . "<br>";
      echo "                         OpenAPI Title: " . $title . "<br>";
      echo "                    Server Sandbox URL: " . $server_sandbox_url . "<br>";
      echo "               OAuth Flow Sandbox Type: " . $oauth_flow_sandbox_type . "<br>";
      echo "                 OAuth Flow Sandbox In: " . $oauth_flow_sandbox_in . "<br>";
      echo "  OAuth Flow Sandbox Authorization URL: " . $oauth_flow_sandbox_authorization_url . "<br>";
      echo "          OAuth Flow Sandbox Token URL: " . $oauth_flow_sandbox_token_url . "<br>";

      echo "                   OpenAPI Description: <br>";
      echo "</pre>";
      echo "<span style='font-size:15px'>" . $description . "<br></span>";
      ?>
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_resource/script/main.js"></script>
  <script src="../_resource/script/log.js"></script>
  <script>
    toggleModuleIcon('action-clinical-api')
  </script>
</body>

</html>