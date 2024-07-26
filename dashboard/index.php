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
  <link rel="shortcut icon" href="../_resource/image/star-logo.png">
  <!-- link in fontawesome (minified version) -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
  <link rel="stylesheet" href="../_resource/style/main.css">
  <link rel="stylesheet" href="../_resource/style/dashboard.css">
  <link rel="stylesheet" href="../_resource/style/log.css">
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
      <h3>Dashboard</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li><a href="#">Tracked Patients</a></li>
      <li><a href="#">Flagged Patients</a></li>
      <li><a href="#">Due this Week</a></li>
      <li><a href="#">High Risk</a></li>
      <li><a href="add.php">Add New Patient</a></li>
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

      <div id="db-container">
        <p id="tracked-patients-box" class="statistic-box">42<br>Tracked Patients</p>
        <p id="flagged-patients-box" class="statistic-box">9<br>Flagged Patients</p>
        <p id="due-this-week-box" class="statistic-box">3<br>Due this Week</p>
        <p id="high-risk-box" class="statistic-box">1<br>High Risk</p>
      </div>

      <br>
      <div id="graph-container">
        <p id="pie-status">&nbsp;&nbsp;Prenatal / Postnatal</p>
        <p id="pie-trimester">&nbsp;&nbsp;Patients by Trimester</p>
        <p id="pie-text4baby">&nbsp;&nbsp;Text4Baby Enrollment</p>
      </div>

      <br><br>
      <div id="items-due-container">
        <table class="dashboard-table">
          <tr>
            <th>Case Owner</th>
            <th>Flag</th>
            <th>Patient</th>
            <th>Last 4</th>
            <th>Pregnancy State</th>
            <th>High Risk</th>
            <th>Last Contact</th>
            <th>Next Contact</th>
            <th>Next Item Due</th>
          </tr>
          <tr>
            <td>A. Smith</td>
            <td style='text-align: center; color: #EF9234'>
              <i class='fa-duotone fa-flag fa-lg'></i>
            </td>
            <td>Renolds, Tina Q</td>
            <td>4567</td>
            <td>Prenatal</td>
            <td style='text-align: center; color: #A30000;'>
              <i class='fa-regular fa-circle-check fa-lg'></i>
            </td>
            <td>06/30/2024</td>
            <td>06/30/2024</td>
            <td>06/30/2024</td>
          </tr>
          <tr>
            <td>B. Jones</td>
            <td>&nbsp;</td>
            <td>Burke, Hanna Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>C. Johnson</td>
            <td style='text-align: center; color: #EF9234'>
              <i class='fa-duotone fa-flag fa-lg'></i>
            </td>
            <td>Berry, Freida Q</td>
            <td>0202</td>
            <td>Second Trimester</td>
            <td style='text-align: center; color: #A30000;'>
              <i class='fa-regular fa-circle-check fa-lg'></i>
            </td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>A. Smith</td>
            <td style='text-align: center; color: #EF9234'>
              <i class='fa-duotone fa-flag fa-lg'></i>
            </td>
            <td>Long, Jenny Q</td>
            <td>0101</td>
            <td>Third Trimester</td>
            <td>&nbsp;</td>
            <td>07/05/2024</td>
            <td>07/05/2024</td>
            <td>07/05/2024</td>
          </tr>
          <tr>
            <td>C. Johnson</td>
            <td>&nbsp;</td>
            <td>Perez, Jamie Q</td>
            <td>1235</td>
            <td>Postnatal</td>
            <td style='text-align: center; color: #A30000;'>
              <i class='fa-regular fa-circle-check fa-lg'></i>
            </td>
            <td>07/05/2024</td>
            <td>07/05/2024</td>
            <td>07/05/2024</td>
          </tr>
          <tr>
            <td>A. Smith</td>
            <td>&nbsp;</td>
            <td>Ernestine, Wanda Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>A. Smith</td>
            <td>&nbsp;</td>
            <td>Walters, Sheila Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>B. Jones</td>
            <td style='text-align: center; color: #EF9234'>
              <i class='fa-duotone fa-flag fa-lg'></i>
            </td>
            <td>Sullivan, Tracy Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>A. Smith</td>
            <td>&nbsp;</td>
            <td>Miles, Rhoda Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
          <tr>
            <td>C. Johnson</td>
            <td style='text-align: center; color: #EF9234'>
              <i class='fa-duotone fa-flag fa-lg'></i>
            </td>
            <td>Lawson, Jennifer Q</td>
            <td>1234</td>
            <td>First Trimester</td>
            <td>&nbsp;</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
            <td>07/01/2024</td>
          </tr>
        </table>
      </div>

      <div class="table-footer">
        <p class="align-left">Showing 1 to 10 of 42 rows</p>
        <p class="align-right"><a href="#">My List</a>&nbsp; | &nbsp;<a href="#">Show All</a>&nbsp;&nbsp;</p>
      </div>
      <div class="align-clear"></div>

      <!-- Present first time access security disclaimer model -->
      <!-- JavaScript listener helps with this -->

      <dialog id='security-dialog' class='security-dialog'>
        <h3>Security Notice</h3>
        <hr>
        <p>This computer system is the property of the <?= ORGANIZATION_NAME . " (" . ORGANIZATION_ACRONYM . ")" ?>. By using this system, all users acknowledge notice of and agree to comply with <?= ORGANIZATION_ACRONYM ?> acceptable use policies.</p>
        <p>This site is intended for use by authorized <?= ORGANIZATION_ACRONYM ?> network users for viewing and retrieving information only, except as otherwise explicitly authorized. All use is considered to be with an understanding and acceptance that there is no reasonable expectation of privacy for any data or transmissions on Government Intranet or Extranet (non-public) networks or systems. All transactions that occur on this system are subject to review and action by <?= ORGANIZATION_ACRONYM ?> and law enforcement personnel. All use of this system constitues understanding and unconditional acceptance of these terms.</p>
        <p>Unauthozired attempts or acts to either (1) access, upload, change, or delete information on this system, (2) modify this system, (3) deny access to this system or (4) accrue resources for unauthorized use on this system are strictly prohibited. Such attempts or acts are subject to action that may result in criminal, civil, or administrative penalties.</p>
        <p>Our mission, as the <?= ORGANIZATION_NAME ?>, is <?= ORGANIZATION_MISSION ?></p>
        <br><br>
        <button id='security-button' class='security-button'>I have read and accept this security notice</button>
      </dialog>

  </main>

  <!-- link in our script -->
  <script src="../_resource/script/main.js"></script>
  <script src="../_resource/script/dashboard.js"></script>
  <script>
    toggleModuleIcon('action-dashboard')
  </script>
</body>

</html>