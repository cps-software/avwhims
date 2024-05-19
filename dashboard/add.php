<?php

/**********************************************************************
 * Clozapine Registry > Dashboard > Add New Application
 **********************************************************************/

session_start();

// check for valid session
include "../_include/session.php";

// pull in some global constant values
include_once '../_include/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AV DRMS Web Application">
    <meta name="author" content="csylvester">
    <link rel="shortcut icon" href="../_image/avdrms-logo.png">

    <!-- link in fontawesome (minified version) -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../_style/main.css">
    <link rel="stylesheet" href="../_style/dashboard.css">
    <title>Clozapine Registry</title>
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
            <h2>Clozapine Registry</h2>
            <h3>Dashboard</h3>
        </div>
        <div>
            <br><br>
        </div>
        <ul>
            <li class="nav-active"><a href="add.php">Add New Application</a></li>
            <li><a href="#">Change Monitoring Frequency</a></li>
            <li><a href="#">Add Override Request</a></li>
            <li><a href="#">Terminate Clozapine</a></li>
        </ul>
    </nav>

    <main id="main">

        <div class="container">
            <p>Clozapine Registry&nbsp;&nbsp;/&nbsp;&nbsp;Dashboard&nbsp;&nbsp;/&nbsp;&nbsp;Add New Application</p>
            <span class="notification-icon">
                <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
                <span class="notification-number">4</span>
            </span>
            <h2 class="container-header">Add New Application</h2>
            <br>

            <!-- multi-step progress bar goes in this area -->
            <div class="progress-container">
                <div id="progress" class="progress">
                    <div class="progress-circle active">Patient</div>
                    <div class="progress-circle">Status</div>
                    <div class="progress-circle">Facility</div>
                    <div class="progress-circle">Prescriber</div>
                    <div class="progress-circle">History</div>
                    <div class="progress-circle">Results</div>
                    <div class="progress-circle">Conditions</div>
                    <div class="progress-circle">Compliance</div>
                </div>
            </div>
            <!-- <br> -->

            <!-- here's where each of the mult-step form areas will go -->
            <!-- a form element will wrap everything -->
            <form data-multi-step>
                <!-- each step/card will be wrapped in a div -->
                <!-- <div class="form-card form-active" data-step="1"> -->
                <div class="form-card" data-step>
                    <h3 class="step-title">Patient</h3>
                    <div class="form-group">
                        <label for="patient-ssn">SSN</label>
                        <input type="text" id="patient-ssn" name="patient-ssn" value="111-11-1111" disabled>
                    </div>
                    <div class="form-group">
                        <label for="patient-lastname">Last Name</label>
                        <input type="text" id="patient-lastname" name="patient-lastname" value="Alexander" disabled>
                        <label for="patient-firstname">First Name</label>
                        <input type="text" id="patient-firstname" name="patient-firstname" value="Dwayne" disabled>
                        <label for="patient-middlename">Middle Name</label>
                        <input type="text" id="patient-middlename" name="patient-middlename" value="Q" disabled>
                    </div>
                    <div class="form-group">
                        <label for="patient-birthdate">Birth Date</label>
                        <input type="text" id="patient-birthdate" name="patient-birthdate">
                        <label for="patient-birthsex">Birth Gender</label>
                        <input type="text" id="patient-birthgender" name="patient-birthgender">
                        <label for="patient-deathdate">Death Date</label>
                        <input type="text" id="patient-deathdate" name="patient-deathdate">
                    </div>
                    <div class="form-group">
                        <label for="patient-race">Race</label>
                        <input type="text" id="patient-race" name="patient-race">
                        <label for="patient-ethnicity">Ethnicity</label>
                        <input type="text" id="patient-ethnicity" name="patient-ethnicity">
                    </div>
                    <br>
                    <button type="button" data-previous-step disabled>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Status</h3>
                    <div class="form-group">
                        <label for="field-0201">Field 02 01</label>
                        <input type="text" id="field-0201" name="field-0201">
                        <label for="field-0202">Field 02 02</label>
                        <input type="text" id="field-0202" name="field-0202">
                        <label for="field-0203">Field 02 03</label>
                        <input type="text" id="field-0203" name="field-0203">
                    </div>
                    <div class="form-group">
                        <label for="field-0204">Field 02 04</label>
                        <input type="text" id="field-0204" name="field-0204">
                        <label for="field-0205">Field 02 05</label>
                        <input type="text" id="field-0205" name="field-0205">
                        <label for="field-0206">Field 02 06</label>
                        <input type="text" id="field-0206" name="field-0206">
                    </div>
                    <div class="form-group">
                        <label for="field-0207">Field 02 07</label>
                        <input type="text" id="field-0207" name="field-0207">
                        <label for="field-0208">Field 02 08</label>
                        <input type="text" id="field-0208" name="field-0208">
                        <label for="field-0209">Field 02 09</label>
                        <input type="checkbox" id="field-0209" name="field-0209">
                    </div>
                    <br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Facility</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div>
                    <br><br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Prescriber</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div>
                    <br><br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">History</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div><br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Results</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div><br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Condition</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div><br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit" disabled>Submit</button>
                </div>
                <div class="form-card" data-step>
                    <h3 class="step-title">Compliance</h3>
                    <div class="form-group">
                        <label for="field-0301">Field 03 01</label>
                        <input type="text" id="field-0301" name="field-0301">
                        <label for="field-0302">Field 03 02</label>
                        <input type="text" id="field-0302" name="field-0302">
                        <label for="field-0303">Field 03 03</label>
                        <input type="text" id="field-0303" name="field-0303">
                    </div>
                    <div class="form-group">
                        <label for="field-0304">Field 03 04</label>
                        <input type="text" id="field-0304" name="field-0304">
                        <label for="field-0305">Field 03 05</label>
                        <input type="checkbox" id="field-0305" name="field-0305">
                        <label for="field-0306">Field 03 06</label>
                        <input type="checkbox" id="field-0306" name="field-0306">
                    </div>
                    <br><br><br><br><br>
                    <button type="button" data-previous-step>Previous</button>
                    <button type="button" data-next-step disabled>Next</button>
                    <button type="button" class="form-save">Save</button>
                    <button type="submit" class="form-submit">Submit</button>
                </div>
            </form>
        </div>

        <!-- Create model for user to select a patient for the new application -->
        <!-- Below is the original model used on startup and initial landing on the Dashboard -->
        <!-- JS listener helps with this -->

        <dialog id='security-dialog' class='security-dialog'>
            <h3>Security Notice</h3>
            <hr>
            <p>This computer system is the property of the <?= ORGANIZATION_NAME . " (" . ORGANIZATION_ACRONYM . ")" ?>. By using this system, all users acknowledge notice of and agree to comply with <?= ORGANIZATION_ACRONYM ?> acceptable use policies.</p>
            <p>This site is intended for use by authorized <?= ORGANIZATION_ACRONYM ?> network users for viewing and retrieving information only, except as otherwise explicitly authorized. All use is considered to be with an understanding and acceptance that there is no reasonable expectation of privacy for any data or transmissions on Government Intranet or Extranet (non-public) networks or systems. All transactions that occur on this system other than the viewing and downloading of website information and all data transmitted through this system are subject to review and action including (but not limited to) monitoring, recording, retrieving, copying, auditing, inspecting, investigating, restricting access, blocking, tracking, disclosing to authorized personnel, or any other authorized actions by all authorized <?= ORGANIZATION_ACRONYM ?> and law enforcement personnel. All use of this system constitues understanding and unconditional acceptance of these terms.</p>
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