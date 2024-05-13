<?php

/**********************************************************************
 * Women's Health Module: Report
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
      <h3>Report</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="#">Report One</a></li>
      <li><a href="#">Report Two</a></li>
      <li><a href="#">Report Three</a></li>
      <li><a href="#">Report Four</a></li>
      <li><a href="#">Report Five</a></li>
    </ul>
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Report</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Report</h2>
      <br>
      <hr>
      <br>
      <img src="../_image/pexels-cat.jpg" alt="Cute Cat Image" class="container-image">
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/log.js"></script>
</body>

</html>