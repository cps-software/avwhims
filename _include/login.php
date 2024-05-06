<?php

/**********************************************************************
 * Process Login via Username + Password
 **********************************************************************/

echo "[01] Script: login.php<br>";

// Include MariaDB server and avwhims database connection Include File
include_once "./dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Validate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../_style/main.css" rel="stylesheet">
</head>

<body>
  <script>
    // javascript function to load teamsite home.php page
    function getHome() {
      window.location = "../dashboard/";
    }
  </script>

  <!-- To-Do: fix the container divs from here to bottom of body -->
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="well">
          <h1>AV WHIMS</h1>
          This is a restricted website for authorized use only.
          <hr />

          <?php
          // use htmlspecialchars() to filter/protect raw user input
          $uname = htmlspecialchars($_POST['user-name']);
          $upass = htmlspecialchars($_POST['user-password']);
          $continue = 0;

          // build SELECT query for username
          $query_username = "SELECT * FROM user_account WHERE username='" . $uname . "'";

          // Run SELECT query	against user_account
          $result = mysqli_query($connection, $query_username);
          if (!$result) {
            die('Select Query Failed: ' . mysqli_connect_error());
          } else {
            print("(1) Select Query Successful <br /><br />");
            // die("<br />Terminating program </body></html>");
          }

          // Get Value from selected row		
          $row1 = mysqli_fetch_array($result);
          if (!$row1) {
            print("No Rows Found" . mysqli_connect_error());
            print("<br /><br />");
          } else {
            print("Row Found ");
            print($row1['id'] . " | " . $row1['username'] . " | " . $row1['password']);
            print("<br /><br />");
            // die("<br />Terminating program </body></html>");
          }

          // Verify Username - check for exact match and input isn't blank
          if ($uname == $row1['username'] and $uname != "") {
            print("Name: ");
            print("<i>✓</i>");
            print("<br>");
            $continue += 1;
          } else {
            print("Name: ");
            print("<i>𐄂</i>");
            print("<br>");
          }

          // Verify Password - check for exact match and input isn't blank
          if ($upass == $row1['password'] and $upass != "") {
            print("Password: ");
            print("<i>✓</i>");
            print("<br>");
            $continue += 1;
          } else {
            print("Password: ");
            print("<i>𐄂</i>");
            print("<br>");
          }

          if ($continue == 2) {
            // store session data
            $_SESSION['user_id'] = $row1['id'];
            $_SESSION['user_name'] = $row1['username'];

            // build SELECT query for station_id and favorite color
            $query_stationid = "SELECT * FROM user_profile WHERE user_account_id='" . $_SESSION['user_id'] . "'";

            // Run SELECT query	against user_profile
            $result = mysqli_query($connection, $query_stationid);
            if (!$result) {
              die('Select Query Failed: ' . mysqli_connect_error());
            } else {
              print("<br />(2) Select Query Successful <br /><br />");
              // die("<br />Terminating program </body></html>");
            }

            // Get Value from selected row		
            $row2 = mysqli_fetch_array($result);
            if (!$row2) {
              print("No Rows Found" . mysqli_connect_error());
              print("<br /><br />");
            } else {
              print("Row Found");
              print("<br /><br />");
            }
            $_SESSION['station_id'] = $row2['station_id'];
            $_SESSION['profile_picture'] = $row2['profile_picture'];

            // Call JavaScript function to load home page, either immediately or after a short delay
            print("<hr>");
            print("Redirecting to home page...<br>");

            // regular version without built-in delay
            // print("<script>getHome();</script>");

            // debug version that adds a delay
            print("<script>setTimeout(function() {getHome()},3000);</script>");
            print("<h3>");
            print("<a class='btn' href='./dashboard/' >Continue to Site</a>");
            print("</h3>");
          } else {
            // Destroy Session
            session_destroy();
            print("<hr>");
            print("<h3>");
            print("<a class='btn' href='.' >Try Again</a>");
            print("</h3>");
          }
          mysqli_close($connection);
          ?>

        </div> <!-- well -->
      </div> <!-- span12 -->
    </div> <!-- row -->
  </div> <!-- /container -->

</body>

</html>