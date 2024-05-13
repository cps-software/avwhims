<?php

/**********************************************************************
 * Template for reusable lefthand side module selection
 * The goal is to provide something similar to VS Code action bar
 **********************************************************************/
?>

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

    <li id="action-provider" class="tooltip">
      <i class="fa-regular fa-user-doctor">
        <span class="action-tooltip">Provider</span>
      </i>
    </li>

    <li id="action-facility" class="tooltip">
      <i class="fa-regular fa-hospital">
        <span class="action-tooltip">Facility</span>
      </i>
    </li>

    <li id="action-clinical-api" class="tooltip">
      <i class="fa-regular fa-lighthouse">
        <span class="action-tooltip">Clinical&nbsp;API</span>
      </i>
    </li>

    <li id="action-patient-api" class="tooltip">
      <i class="fa-regular fa-lighthouse">
        <span class="action-tooltip">Patient&nbsp;API</span>
      </i>
    </li>

    <li id="action-report" class="tooltip">
      <i class="fa-regular fa-file-chart-column">
        <span class="action-tooltip">Report</span>
      </i>
    </li>

    <li id="action-log" class="tooltip">
      <i class="fa-regular fa-list">
        <span class="action-tooltip">Log</span>
      </i>
    </li>

    <li id="action-administration" class="tooltip">
      <i class="fa-regular fa-screwdriver-wrench">
        <span class="action-tooltip">Administration</span>
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