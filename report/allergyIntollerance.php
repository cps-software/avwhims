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

// Add reference to get_provider() function
// require "./get_provider.php";

// $provider_array = get_provider();
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
      <h3>Report</h3>
    </div>
    <div>
      <br><br>
    </div>
    <ul>
      <li></li>
      <li class="nav-active"><a href="#">AllergyIntollerance</a></li>
      <li><a href="#">Condition</a></li>
      <li><a href="#">MedicationDispense</a></li>
      <li><a href="#">MedicationRequest</a></li>
      <li><a href="#">Observation</a></li>
      <li><a href="#">Patient</a></li>
      <li><a href="#">Practitioner</a></li>
    </ul>
  </nav>

  <main id="main">
    <div class="container">
      <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Report&nbsp;&nbsp;/&nbsp;&nbsp;AllergyIntollerance</p>
      <span class="notification-icon">
        <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
        <span class="notification-number">4</span>
      </span>
      <h2 class="container-header">Report</h2>
      <br>

      <div class="hl7-filter-container">
        <form action="" id="hl7-filter">
          <div class="form-control">
            <label for="hl7-filter-from">Patient Name</label><br>
            <input type="date" name="hl7-filter-from">
          </div>
          <div class="form-control">
            <label for="hl7-filter-to">Patient SSN</label><br>
            <input type="date" name="hl7-filter-to">
          </div>
          <div class="form-control">
            <label for="hl7-filter-status">Treatment Status</label><br>
            <select id="hl7-filter-status" name="hl7-filter-status">
              <option value="all">All Messages</option>
              <option value="valid">Valid</option>
              <option value="invalid">Invalid</option>
            </select>
          </div>
          <div class="form-control">
            <label for="hl7-filter-submit"></label>
            <input type="submit" name="hl7-filter-submit" value="Search">
          </div>
        </form>
      </div>
      <br>
      <hr>
      <br>

      <table id="patient-table" class="hl7-table">
        <tr>
          <th>Patient Name</th>
          <th>REMS ID</th>
          <th>NCCC ID</th>
          <th>SSN</th>
          <th>Date of Birth</th>
          <th>Date of Death</th>
          <th>Treatment Status</th>
          <th>MPI Sync</th>
          <th>Action</th>
        </tr>
      </table>

      <div class="table-footer">
        <p class="align-left">Showing 1 to 10 of 989 rows</p>
        <p class="align-right">&nbsp;&lt;&nbsp;1 | 2 | 3 | 4 | 5&nbsp;&gt;&nbsp;</p>
      </div>
      <div class="align-clear"></div>

      <br>
      <hr>
      <h3>HL7 FHIR Provider Resource</h3>

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
  <script src="../_resource/script/main.js"></script>
  <script src="../_resource/script/log.js"></script>
</body>

</html>