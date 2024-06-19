<?php

/**********************************************************************
 * Women's Health Module: Facility
 * Initial implementation calls Lighthouse VA Facilities API
 * Initial (and maybe final) implementation uses JavaScript Ajax
 **********************************************************************/

// On initial page load run function to get all facilities into a JSON object
// Then, call function to get and render first record
// Create listeners for "previous" and "next" buttons
// Respond to button clicks by get and render previous/next facility
// Creatre nice layout of a single facility at a time
// Later, you can figure out how to search/get/display a specific facility

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

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
  <link rel="stylesheet" href="../_resource/style/facility.css">
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
      <h3>Facility</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="#">Select Facility</a></li>
      <li><a href="#">Select VISN</a></li>
      <li><a id="show-json-facilities">Show JSON Format</a></li>

    </ul>
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Facility</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Facility</h2>
      <br>
      <div id="facility-container"></div>
      <div id="facility-footer">
        <button id="button-previous" class="button-footer">Previous</button>
        <button id="button-next" class="button-footer">Next</button>
      </div>
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_resource/script/main.js"></script>
  <script src="../_resource/script/facility.js"></script>
  <script>
    toggleModuleIcon('action-facility')
  </script>
</body>

</html>