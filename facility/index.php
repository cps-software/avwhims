<?php

/**********************************************************************
 * Women's Health Module: Facility
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include MariaDB server and avdrms database connection include file
include "../_include/dbconnect.php";

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
      <h3>Facility</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="#">Function One</a></li>
      <li><a href="#">Function Two</a></li>
      <li><a href="#">Function Three</a></li>
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
      <hr>
      <br>
      <img src="../_image/pexels-cat.jpg" alt="Cute Cat Image" class="container-image">
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/log.js"></script>
  <script>
    toggleModuleIcon('action-facility')
  </script>
</body>

</html>