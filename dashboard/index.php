<?php

/**********************************************************************
 * Women's Health Module: Dashboard
 * Landing page after completing login via username/password or SSO
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

// Pull in some global constant values
include_once '../_include/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AV WHIMS Web Application">
  <meta name="author" content="csylvester">
  <link rel="shortcut icon" href="../_image/star-logo.png">

  <!-- link in fontawesome (minified version) -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
  <link rel="stylesheet" href="../_style/main.css">
  <link rel="stylesheet" href="../_style/dashboard.css">
  <title>Women's Health</title>
</head>

<body>
  <!-- lefthands side VS Code-like action bar -->
  <!-- transition this file to PHP and include aside section here -->
  <aside>
    <ul class="action">

      <li id="action-dashboard" class="action-active tooltip">
        <i class="fa-regular fa-house">
          <span class="action-tooltip">Dashboard</span>
        </i>
      </li>

      <li id="action-patient" class="tooltip">
        <i class="fa-regular fa-users-medical">
          <span class="action-tooltip">Patient</span>
        </i>
      </li>

      <li id="action-report" class="tooltip">
        <i class="fa-regular fa-file-chart-column">
          <span class="action-tooltip">Report</span>
        </i>
      </li>

      <li id="action-prescriber" class="tooltip">
        <i class="fa-regular fa-user-doctor">
          <span class="action-tooltip">Prescriber</span>
        </i>

      </li>

      <li id="action-pharmacy" class="tooltip">
        <i class="fa-regular fa-prescription-bottle-medical">
          <span class="action-tooltip">Pharmacy</span>
        </i>
      </li>

      <li id="action-facility" class="tooltip">
        <i class="fa-regular fa-hospital">
          <span class="action-tooltip">Facility</span>
        </i>
      </li>

      <li id="action-contact" class="tooltip">
        <i class="fa-regular fa-address-card">
          <span class="action-tooltip">Contact</span>
        </i>
      </li>

      <li id="action-administration" class="tooltip">
        <i class="fa-regular fa-screwdriver-wrench">
          <span class="action-tooltip">Administration</span>
        </i>
      </li>

      <li id="action-log" class="tooltip">
        <i class="fa-regular fa-list">
          <span class="action-tooltip">Log</span>
        </i>
      </li>

      <li id="action-help" class="tooltip">
        <i class="fa-regular fa-message-question">
          <span class="action-tooltip">Help</span>
        </i>
      </li>

      <li id="action-profile" class="tooltip">
        <i class="fa-regular fa-user">
          <span class="action-tooltip">Profile</span>
        </i>
      </li>

    </ul>
    <button id="toggle" class="toggle"><i class="fa fa-bars"></i></button>
  </aside>

  <!-- lefthand side navigation area -->
  <nav id="nav">
    <div class="nav-title">
      <h2>Women's Health</h2>
      <h3>Dashboard</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="add.php">Add New Application</a></li>
      <li><a href="#">Change Monitoring Frequency</a></li>
      <li><a href="#">Add Override Request</a></li>
      <li><a href="#">Terminate Clozapine</a></li>
    </ul>
  </nav>

  <main id="main">

    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Dashboard</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Dashboard</h2>
      <br>

      <div class="dashboard-container">
        <h3 class="dashboard-title">To Do</h3>
        <div class="dashboard-active">
          <p class="dashboard-content">
            Dashboard content goes here. Dashboard content goes here. Dashboard content goes here. Dashboard content
            goes here. Dashboard content goes here. Dashboard content goes here. Dashboard content goes here.
            Dashboard
            content goes here. Dashboard content goes here. Dashboard content goes here.
            <br><br>
            Dashboard content goes here. Dashboard content goes here. Dashboard content goes here. Dashboard content
            goes here. Dashboard content goes here. Dashboard content goes here. Dashboard content goes here.
            Dashboard
            content goes here. Dashboard content goes here. Dashboard content goes here.
          </p>
          <button class="dashboard-toggle">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </div>
      </div>
      <br>

      <div class="dashboard-container">
        <h3 class="dashboard-title">Pending</h3>
        <p class="dashboard-content">
          Dashboard content goes here. Dashboard content goes here. Dashboard content goes here.
          <br><br>
          Dashboard content goes here.
        </p>
        <button class="dashboard-toggle">
          <i class="fa-solid fa-plus"></i>
          <i class="fa-solid fa-minus"></i>
        </button>
      </div>
      <br>

      <div class="dashboard-container">
        <h3 class="dashboard-title">Completed</h3>
        <p class="dashboard-content">
          Dashboard content goes here. Dashboard content goes here. Dashboard content goes here. Dashboard content
          goes here. Dashboard content goes here. Dashboard content goes here.
          <br><br>
          Dashboard content goes here. Dashboard content goes here. Dashboard content goes here.
          <br><br>
          Dashboard content goes here. Dashboard content goes here. Dashboard content goes here.
        </p>
        <button class="dashboard-toggle">
          <i class="fa-solid fa-plus"></i>
          <i class="fa-solid fa-minus"></i>
        </button>
      </div>
    </div>

    <!-- Present first time access security disclaimer model -->
    <!-- JS listener helps with this -->

    <dialog id='security-dialog' class='security-dialog'>
      <h3>Security Notice</h3>
      <hr>
      <p>This computer system is the property of the <?= ORGANIZATION_NAME . " (" . ORGANIZATION_ACRONYM . ")" ?>. By using this system, all users acknowledge notice of and agree to comply with <?= ORGANIZATION_ACRONYM ?> acceptable use policies.</p>
      <p>This site is intended for use by authorized <?= ORGANIZATION_ACRONYM ?> network users for viewing and retrieving information only, except as otherwise explicitly authorized. All use is considered to be with an understanding and acceptance that there is no reasonable expectation of privacy for any data or transmissions on Government Intranet or Extranet (non-public) networks or systems. All transactions that occur on this system are subject to review and action by <?= ORGANIZATION_ACRONYM ?> and law enforcement personnel. All use of this system constitues understanding and unconditional acceptance of these terms.</p>
      <p>Unauthozired attempts or acts to either (1) access, upload, change, or delete information on this system, (2) modify this system, (3) deny access to this system or (4) accrue resources for unauthorized use on this system are strictly prohibited. Such attempts or acts are subject to action that may result in criminal, civil, or administrative penalties.</p>
      <p>Our mission, as the <?= ORGANIZATION_NAME ?>, is <?= ORGANIZATION_MISSION ?></p>
      <br><br>
      <!-- <img src="../_image/va-logo.jpeg" class="security-image" alt="Department of Veterans Affairs Logo"> -->
      <button id='security-button' class='security-button'>I have read and accept this security notice</button>
    </dialog>

  </main>

  <!-- link in our script -->
  <script src="../_script/main.js"></script>
  <script src="../_script/dashboard.js"></script>
</body>

</html>