<?php

/**********************************************************************
 * Women's Health Module: Profile
 * Function: Change Password
 * Form that allows user to change their password.
 * 
 * Approach: check if required variables are set
 *           if not, this is the first time we're hitting this page
 *           if yes, validate the input and process the pw update
 *           render this page again with any applicable messages
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in global constants
include_once '../_include/config.php';

// Include MariaDB server and avwhims database connection Include File
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
  <link rel="stylesheet" href="../_style/profile.css">
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
      <h3>Profile</h3>
    </div>
    <div class="logo">
      <!-- <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="user photo"> -->
      <img src="../_image/<?= $_SESSION['profile_picture'] ?>" alt="user photo">
      <div class="username"><?= $_SESSION['user_name'] ?></div>
    </div>
    <ul>
      <!-- <li><a href="#">Profile Function</a></li> -->
      <li class="nav-active"><a href="password.php">Change Password</a></li>
      <li><a href="../">Logout</a></li>
    </ul>
  </nav>

  <main id="main">

    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Profile&nbsp;&nbsp;/&nbsp;&nbsp;Change Password</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Profile</h2>
      <br>

      <div class="profile-container">

        <form id="form" class="form" method="post">
          <h2>Change Password</h2>

          <h4>User Information</h4>
          <div class="form-control">
            <label for="user-firstname">First Name&nbsp;&nbsp;&nbsp;</label>
            <input type="text" id="user-firstname" class="profile-text">
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="user-lastname">Last Name&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" id="user-lastname" class="profile-text">
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="user-workphone">Work Phone</label>
            <input type="text" id="user-workphone" class="profile-text">
            <small>Error message</small>
          </div>

          <h4>System Settings</h4>
          <div class="form-control">
            <input type="checkbox" id="expand-sidebar" class="checkbox" checked>
            <label for="expand-sidebar">Expand Sidebar When App Starts</label>
            <small>Error message</small>
          </div>
          <div class="form-control">
            <input type="checkbox" id="timeout-sound" class="checkbox" checked>
            <label for="timeout-sound">Play Timeout Warning Sound</label>
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="color-theme">Color Theme&nbsp;</label>
            <select name="color-theme" id="color-theme">
              <option value="light">Light</option>
              <option value="dark">Dark</option>
              <option value="accessibility">Accessability</option>
            </select>
            <small>Error message</small>
          </div>
          <button type="submit">save</button>
        </form>

      </div>
    </div>
  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/profile.js"></script>
  <script>
    toggleModuleIcon('action-profile')
  </script>
</body>

</html>