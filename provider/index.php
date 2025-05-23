<?php

/**********************************************************************
 * Women's Health Module: Provider
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include MariaDB server and avdrms database connection include file
include "../_include/dbconnect.php";

// Add reference to get_provider() function
require "./get_provider.php";

$provider_array = get_provider();
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
      <h3>Provider</h3>
    </div>
    <div>
      <br><br>
    </div>
    <!-- <ul>
            <li></li>
            <li><a href="#">Security Events</a></li>
            <li class="nav-active"><a href="hl7.php">HL7 Messages</a></li>
            <li><a href="#">User Logs</a></li>
        </ul> -->
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Provider</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Provider</h2>
      <br>
      <hr>
      <h3>HL7 FHIR Provider Resource</h3>

      <?php
      // parse a few values from the provider associative array
      $resourceType = $provider_array['resourceType'];
      $entryResourceType = $provider_array['entry'][0]['resource']['resourceType'];
      $entryResourceId = $provider_array['entry'][0]['resource']['id'];
      $entryResourceMetaLastUpdated = $provider_array['entry'][0]['resource']['meta']['lastUpdated'];

      $entryResourceNameFamily = $provider_array['entry'][0]['resource']['name'][0]['family'];
      $entryResourceNameGiven = $provider_array['entry'][0]['resource']['name'][0]['given'][0];
      $entryResourceGender = $provider_array['entry'][0]['resource']['gender'];
      $entryResourceQualificationCodeText = $provider_array['entry'][0]['resource']['qualification'][0]['code']['text'];

      $entryResourceAddressLine1 = $provider_array['entry'][0]['resource']['address'][0]['line'][0];
      $entryResourceAddressLine2 = $provider_array['entry'][0]['resource']['address'][0]['line'][1];
      $entryResourceAddressCity = $provider_array['entry'][0]['resource']['address'][0]['city'];
      $entryResourceAddressState = $provider_array['entry'][0]['resource']['address'][0]['state'];
      $entryResourceAddressPostalCode = $provider_array['entry'][0]['resource']['address'][0]['postalCode'];

      echo "<pre>";
      echo "                         Resource Type: " . $resourceType . "<br>";
      echo "                   Entry Resource Type: " . $entryResourceType . "<br>";
      echo "                     Entry Resource ID: " . $entryResourceId . "<br>";
      echo "      Entry Resource Meta Last Updated: " . $entryResourceMetaLastUpdated . "<br><br>";

      echo "            Entry Resource Name Family: " . $entryResourceNameFamily . "<br>";
      echo "             Entry Resource Name Given: " . $entryResourceNameGiven . "<br>";
      echo "                 Entry Resource Gender: " . $entryResourceGender . "<br>";
      echo "Entry Resource Qualification Code Text: " . $entryResourceQualificationCodeText . "<br><br>";

      echo "         Entry Resource Address Line 1: " . $entryResourceAddressLine1 . "<br>";
      echo "         Entry Resource Address Line 2: " . $entryResourceAddressLine2 . "<br>";
      echo "           Entry Resource Address City: " . $entryResourceAddressCity . "<br>";
      echo "          Entry Resource Address State: " . $entryResourceAddressState . "<br>";
      echo "        Entry Resource Address Zipcode: " . $entryResourceAddressPostalCode . "<br>";
      echo "</pre>";
      ?>

    </div>
  </main>

  <!-- link in our script -->
  <script src="../_resource/script/main.js"></script>
  <script src="../_resource/script/log.js"></script>
  <script>
    toggleModuleIcon('action-provider')
  </script>
</body>

</html>