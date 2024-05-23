<?php

/**********************************************************************
 * Women's Health Module: Patient
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
            <h3>Patient</h3>
        </div>
        <div>
            <br><br>
        </div>
        <ul>
            <li><a href="#">Track a Patient</a></li>
            <!-- <li class="nav-active"><a href="#">Next Item</a></li> -->
            <li><a href="#">Tracking History</a></li>
            <li><a href="#">Education Items</a></li>
            <li><a href="#">Checklist</a></li>
        </ul>
    </nav>

    <main id="main">

        <div class="container">
            <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Patient</p>
            <span class="notification-icon">
                <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
                <span class="notification-number">4</span>
            </span>
            <h2 class="container-header">Patient</h2>
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

                    <?php
                    // build SELECT query to get first 10 rows from patient table
                    $query_patient = "SELECT * FROM patient LIMIT 10";

                    // Run SELECT query against patient table
                    // To-Do: figure out how to do try/catch block here
                    $result_patient = mysqli_query($connection, $query_patient);

                    // verify query ran successfully
                    if (!$result_patient) {
                        echo "<br>Select Query Failed" . mysqli_connect() . "<br><br>";
                        // die();
                    } else {
                        // echo "<br>Get Patient: Select Query Successful... <br><br>";
                        // die();
                    }

                    for ($i = 1; $i <= 10; $i++) {
                        // Get current row
                        $current_row = mysqli_fetch_array($result_patient);

                        // verify results
                        if (!$current_row) {
                            print("No Rows Found" . mysqli_connect_error() . "<br>");
                        } else {
                            echo "<tr>";
                            echo "<td>" . ucfirst($current_row['patient_lastname']) . ", " . ucfirst($current_row['patient_firstname']) . " " . ucfirst($current_row['patient_middlename']) . "</td>";
                            echo "<td>" . $current_row['patient_rems_id'] . "</td>";
                            echo "<td>" . $current_row['patient_nccc_id'] . "</td>";
                            echo "<td>" . $current_row['patient_ssn'] . "</td>";
                            $pt_birthdate = date_parse($current_row['patient_date_of_birth']);
                            echo "<td>" . $pt_birthdate['year'] . "-" . sprintf('%02d', $pt_birthdate['month']) . "-" . sprintf('%02d', $pt_birthdate['day']) . "</td>";
                            if (is_null($current_row['patient_date_of_death'])) {
                                echo "<td>&nbsp;";
                            } else {
                                $pt_deathdate = date_parse($current_row['patient_date_of_death']);
                                echo "<td>" . $pt_deathdate['year'] . "-" . sprintf('%02d', $pt_deathdate['month']) . "-" . sprintf('%02d', $pt_deathdate['day']) . "</td>";
                            }
                            $pt_status = ($i % 3 == 0) ? "Discontinued" : "Active";
                            echo "<td>" . $pt_status . "</td>";
                            $pt_mpi_value = $current_row['mpi_sync'] + 0;
                            $pt_mpi_desc = ($pt_mpi_value) ? "Enabled" : "Disabled";
                            echo "<td>" . $pt_mpi_desc . "</td>";
                            echo "<td>";
                            echo "<button class='btn' onclick='showHl7Msg(1)'><i class='fa-regular fa-pen-to-square fa-lg'></i></button>";
                            echo "<button class='btn' onclick='showHl7Msg(1)'><i class='fa-regular fa-memo-circle-info fa-lg'></i></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
                <div class="table-footer">
                    <p class="align-left">Showing 1 to 10 of 989 rows</p>
                    <p class="align-right">&nbsp;&lt;&nbsp;1 | 2 | 3 | 4 | 5&nbsp;&gt;&nbsp;</p>
                </div>
                <div class="align-clear"></div>
            </div>
        </div>

        <!-- this is where the modal structure and area will go -->
        <!-- use JavaScript to fill in the values and display -->

        <dialog id='hl7message-dialog' class='hl7message-dialog'>
            <button id='hl7message-button' class='hl7message-button'><i class="fa-regular fa-square-xmark fa-2xl"></i></button>
            <h3>HL7 Message Content Goes Here</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam eget rutrum aliquet. Donec ullamcorper, dui non blandit volutpat, leo velit pretium mauris, a varius lorem arcu sed nisl. Aliquam non maximus nisl, quis tincidunt nibh. Vivamus finibus, libero sit amet fringilla aliquet, ipsum dolor hendrerit quam, vitae tempus diam nibh tincidunt lacus. Cras vel lacus interdum, vehicula mi eu, viverra metus. Aliquam at augue rutrum ex pellentesque blandit. Mauris ac tortor magna. Fusce leo nisi, lacinia eget magna sit amet, convallis blandit nunc. Suspendisse sit amet mattis enim. Aenean quis arcu arcu. Sed euismod ex et lacus porttitor, non laoreet erat tempor. Maecenas bibendum fermentum neque eget euismod. Nam sollicitudin turpis at finibus elementum.</p>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi lorem sapien, viverra sed odio sed, tristique consectetur ligula. Aenean vestibulum magna eget nisl aliquet, vel malesuada mauris auctor. Suspendisse sit amet mattis enim. Aenean quis arcu arcu. Sed euismod ex et lacus porttitor, non laoreet erat tempor. Maecenas bibendum fermentum neque eget euismod. Nam sollicitudin turpis at finibus elementum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam eget rutrum aliquet. Donec ullamcorper, dui non blandit volutpat, leo velit pretium mauris, a varius lorem arcu sed nisl. Aliquam non maximus nisl, quis tincidunt nibh. Vivamus finibus, libero sit amet fringilla aliquet, ipsum dolor hendrerit quam, vitae tempus diam nibh tincidunt lacus. Cras vel lacus interdum, vehicula mi eu, viverra metus. Aliquam at augue rutrum ex pellentesque blandit.</p>
            <br>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam eget rutrum aliquet. Donec ullamcorper, dui non blandit volutpat, leo velit pretium mauris, a varius lorem arcu sed nisl. Aliquam non maximus nisl, quis tincidunt nibh. Vivamus finibus, libero sit amet fringilla aliquet, ipsum dolor hendrerit quam, vitae tempus diam nibh tincidunt lacus. Cras vel lacus interdum, vehicula mi eu, viverra metus. Aliquam at augue rutrum ex pellentesque blandit. Mauris ac tortor magna. Fusce leo nisi, lacinia eget magna sit amet, convallis blandit nunc. Suspendisse sit amet mattis enim. Aenean quis arcu arcu. Sed euismod ex et lacus porttitor, non laoreet erat tempor. Maecenas bibendum fermentum neque eget euismod. Nam sollicitudin turpis at finibus elementum.</p>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi lorem sapien, viverra sed odio sed, tristique consectetur ligula. Aenean vestibulum magna eget nisl aliquet, vel malesuada mauris auctor. Suspendisse sit amet mattis enim. Aenean quis arcu arcu. Sed euismod ex et lacus porttitor, non laoreet erat tempor. Maecenas bibendum fermentum neque eget euismod. Nam sollicitudin turpis at finibus elementum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam eget rutrum aliquet. Donec ullamcorper, dui non blandit volutpat, leo velit pretium mauris, a varius lorem arcu sed nisl. Aliquam non maximus nisl, quis tincidunt nibh. Vivamus finibus, libero sit amet fringilla aliquet, ipsum dolor hendrerit quam, vitae tempus diam nibh tincidunt lacus. Cras vel lacus interdum, vehicula mi eu, viverra metus. Aliquam at augue rutrum ex pellentesque blandit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam eget rutrum aliquet. Donec ullamcorper, dui non blandit volutpat, leo velit pretium mauris, a varius lorem arcu sed nisl. Aliquam non maximus nisl, quis tincidunt nibh. Vivamus finibus, libero sit amet fringilla aliquet, ipsum dolor hendrerit quam, vitae tempus diam nibh tincidunt lacus. Cras vel lacus interdum, vehicula mi eu, viverra metus. Aliquam at augue rutrum ex pellentesque blandit.</p>
            <br>
        </dialog>

    </main>

    <!-- link in our script -->
    <script src="../_script/main.js"></script>
    <script src="../_script/log.js"></script>
    <script>
        toggleModuleIcon('action-patient')
    </script>
</body>

</html>