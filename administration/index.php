<?php

/**********************************************************************
 * Women's Health Module: Administration
 **********************************************************************/

session_start();

// Check for valid session
include "../_include/session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AV DRMS Web Application">
    <meta name="author" content="csylvester">
    <link rel="shortcut icon" href="../_image/star-logo.png">

    <!-- link in fontawesome (minified version)-->
    <link rel="stylesheet" href="https://kit.fontawesome.com/124182fb50.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../_style/main.css">
    <link rel="stylesheet" href="../_style/administration.css">
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
            <h3>Administration</h3>
        </div>
        <div>
            <br><br>
        </div>
        <ul>
            <li><a href="#">Users</a></li>
            <li><a href="#">Roles</a></li>
            <li><a href="#">Permissions</a></li>
            <li><a href="#">Medications</a></li>
            <li><a href="#">Diagnosis Codes</a></li>
            <li><a href="#">Site Messages</a></li>
            <li><a href="#">Override Codes</a></li>
            <li><a href="#">Facility Administration</a></li>
            <li><a href="#">Compliance Statements</a></li>
            <li><a href="#">Stop Reasons</a></li>
        </ul>
    </nav>

    <main id="main">

        <div class="container">
            <p>Women's Health&nbsp;&nbsp;/&nbsp;&nbsp;Administration</p>
            <span class="notification-icon">
                <i class="fa-regular fa-bell" style="color: #2e6a95;"></i>
                <span class="notification-number">4</span>
            </span>
            <h2 class="container-header">Administration</h2>
            <br>

            <div class="dashboard-container">
                <h3 class="dashboard-title">Placeholder Container</h3>
                <div class="dashboard-active">
                    <p class="dashboard-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar lectus sed luctus viverra. Pellentesque fringilla ac mauris quis pharetra. Vestibulum a arcu ac libero eleifend cursus sed a ligula. Sed pretium neque ac diam venenatis posuere. Vivamus luctus dapibus eros et pulvinar. Donec fermentum justo nec aliquam rhoncus. Quisque dolor justo, facilisis vel ultricies ac, sodales in orci. Fusce ultricies ante quis ligula sagittis, sit amet euismod quam malesuada. In enim purus, lacinia non augue sit amet, dignissim malesuada felis. Fusce feugiat, arcu in ultricies commodo, turpis arcu placerat nibh, vitae egestas massa dui sit amet enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed quis laoreet lectus.
                        <br><br>
                        Phasellus at vulputate sem. Quisque tempor et purus ac dictum. Praesent id est fermentum, dictum diam eu, volutpat justo. Proin eu nisl risus. Maecenas nec velit ac nunc venenatis blandit. Aliquam pulvinar, velit non sollicitudin blandit, odio dui imperdiet lorem, ac vestibulum odio diam in velit. Morbi aliquet metus at rutrum euismod. Suspendisse ornare auctor elit nec rhoncus. Aliquam rutrum convallis gravida. Nunc in diam eros. Sed purus urna, varius a ipsum sed, fringilla euismod mauris. Cras bibendum nisl eget rhoncus sagittis. Nunc malesuada turpis in metus aliquet viverra. Donec aliquet lacus quis eros cursus, vitae congue nibh aliquam. Ut fermentum lacus ipsum, vel lobortis ex dapibus quis.
                        <br><br>
                        Vestibulum et elit ut ligula euismod congue. In hac habitasse platea dictumst. Etiam lacinia tempus fermentum. Donec faucibus, mauris et interdum pharetra, libero justo rutrum leo, ac rutrum diam tellus ut nibh. Donec at ultrices nisl, eu convallis urna. Ut condimentum odio eros, eu mattis mauris pellentesque a. Vivamus rhoncus id erat eu aliquam. Sed vitae augue sit amet massa gravida porta vitae non dolor. Aliquam felis mauris, pulvinar id erat nec, sagittis posuere nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec diam felis, accumsan sed ligula a, scelerisque consectetur mauris. Nunc consequat ac mauris vulputate aliquam. Sed mi urna, porta ut ante vel, laoreet pretium lorem. Vivamus a tempor lorem. Sed ac arcu id orci sodales scelerisque at quis nisi. Nullam aliquam justo arcu.
                    </p>
                    <button class="dashboard-toggle">
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </div>
            <br>

            <!-- <div class="dashboard-container">
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
            </div> -->

        </div>

    </main>

    <!-- link in our script -->
    <script src="../_script/main.js"></script>
    <script src="../_script/administration.js"></script>
</body>

</html>