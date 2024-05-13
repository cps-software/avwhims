<?php

/**********************************************************************
 * Women's Health Module: VA Lighthouse - Patient Health API
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include MariaDB server and avdrms database connection include file
include "../_include/dbconnect.php";

// Add reference to get_metadata() function
require "./get_metadata.php";

// $metadata_array = get_metadata();
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
      <h3>Patient Health API</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="#">Resource One</a></li>
      <li><a href="#">Resource Two</a></li>
      <li><a href="#">Resource Three</a></li>
    </ul>
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Patient Health API</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Patient Health API (FHIR)</h2>
      <br>
      <hr>
      <h3>Patient Health API - Open API 3.0.1 - US Core R4</h3>

      <?php
      // parse a few values from the provider associative array
      $resourceType = $provider_array['resourceType'];
      $entryResourceType = $provider_array['entry'][0]['resource']['resourceType'];
      $entryResourceId = $provider_array['entry'][0]['resource']['id'];
      $entryResourceNameFamily = $provider_array['entry'][0]['resource']['name'][0]['family'];
      $entryResourceNameGiven = $provider_array['entry'][0]['resource']['name'][0]['given'][0];
      $entryResourceGender = $provider_array['entry'][0]['resource']['gender'];
      $entryResourceQualificationCodeText = $provider_array['entry'][0]['resource']['qualification'][0]['code']['text'];

      echo "<pre>";
      echo "                         Resource Type: " . $resourceType . "<br>";
      echo "                   Entry Resource Type: " . $entryResourceType . "<br>";
      echo "                     Entry Resource ID: " . $entryResourceId . "<br>";
      echo "            Entry Resource Name Family: " . $entryResourceNameFamily . "<br>";
      echo "             Entry Resource Name Given: " . $entryResourceNameGiven . "<br>";
      echo "                 Entry Resource Gender: " . $entryResourceGender . "<br>";
      echo "Entry Resource Qualification Code Text: " . $entryResourceQualificationCodeText . "<br>";
      echo "</pre>";
      ?>
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/log.js"></script>
</body>

</html>