<?php

/************************************************************
 * Women's Health Page: Log > HL7 Messages
 ************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

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
    <title>Clozapine Registry</title>
</head>

<body>
    <!-- lefthands side VS Code-like action bar -->
    <!-- transition this file to PHP and include aside section here -->
    <aside>
        <ul class="action">

            <li id="action-dashboard" class="tooltip">
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

            <li id="action-log" class="tooltip action-active">
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
            <h3>Log</h3>
        </div>
        <div>
            <br><br>
        </div>
        <ul>
            <li><a href="#">System Logs</a></li>
            <li><a href="#">Security Events</a></li>
            <li class="nav-active"><a href="hl7.php">HL7 Messages</a></li>
            <li><a href="#">User Logs</a></li>
        </ul>
    </nav>

    <main id="main">

        <div class="container">
            <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Log&nbsp;&nbsp;/&nbsp;&nbsp;HL7 Messages</p>
            <span class="notification-icon">
                <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
                <span class="notification-number">4</span>
            </span>
            <h2 class="container-header">HL7 Messages</h2>
            <br>

            <div class="hl7-filter-container">
                <form action="" id="hl7-filter">
                    <div class="form-control">
                        <label for="hl7-filter-from">From</label><br>
                        <input type="date" name="hl7-filter-from">
                    </div>
                    <div class="form-control">
                        <label for="hl7-filter-to">To</label><br>
                        <input type="date" name="hl7-filter-to">
                    </div>
                    <div class="form-control">
                        <label for="hl7-filter-status">Status</label><br>
                        <select id="hl7-filter-status" name="hl7-filter-status">
                            <option value="all">All Messages</option>
                            <option value="valid">Valid</option>
                            <option value="invalid">Invalid</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="hl7-filter-submit"></label>
                        <input type="submit" name="hl7-filter-submit" value="Filter Messages">
                    </div>
                </form>
                <br>
                <hr>
                <br>
                <table id="hl7-table" class="hl7-table">
                    <tr>
                        <th>Received Date</th>
                        <th>Facility</th>
                        <th>Patient Last Name</th>
                        <th>Message Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:41 PM</td>
                        <td>872 - HL7 SAN-JUAN MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(1)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:41 PM</td>
                        <td>872 - HL7 SAN-JUAN.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(2)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:41 PM</td>
                        <td>872 - HL7 SAN-Juan.Med.VA.Gov</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(3)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:41 PM</td>
                        <td>872 - HL7 SAN-Juan.Med.VA.Gov</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(4)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:41 PM</td>
                        <td>872 - HL7 SAN-Juan.Med.VA.Gov</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(5)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:42 PM</td>
                        <td>548 - HL7 WEST-PALM.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(6)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:42 PM</td>
                        <td>548 - HL7.WEST-PALM.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(7)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:43 PM</td>
                        <td>548 - HL7 WEST-PALM.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(8)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:43 PM</td>
                        <td>548 - HL7 WEST-PALM.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(9)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
                    <tr>
                        <td>4/7/2022 @ 8:43 PM</td>
                        <td>548 - HL7 WEST-PALM.MED.VA.GOV</td>
                        <td>Ruiz</td>
                        <td>ADT_A28</td>
                        <td>Status</td>
                        <td><button class="btn" onclick="showHl7Msg(10)"><i class="fa-regular fa-memo-circle-info fa-lg"></i></button></td>
                    </tr>
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
</body>

</html>