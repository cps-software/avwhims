<?php

/**********************************************************************
 * Connect to MySQL/MariaDB Server and AVWHIMS Database
 **********************************************************************/

include_once './config.php';

$servername = $_SERVER["SERVER_NAME"];
// echo $servername . "<br>";

// determine local or remote server
if ($servername == "localhost") {
  // echo "[01] Script: dbconnect.php<br>";
  $connection = mysqli_connect(LH_HOSTNAME, LH_USERNAME, LH_PASSWORD, LH_DATABASE);
  if (!$connection) {
    print("Could not connect to " . LH_HOSTNAME . ": " . mysqli_connect_error());
    die("<br />Terminating program </body></html>");
  } else {
    // print("MySQL connection on localhost created <br>");
    $result = mysqli_query($connection, "SELECT DATABASE()");
    $row = mysqli_fetch_row($result);
    // print("Default database is " . $row[0] . "<br><br>");
    // die("<br />Terminating program </body></html>");
  }
} else if ($servername == "cpssoftware.com") {
  $connection = mysqli_connect(GD_HOSTNAME, GD_USERNAME, GD_PASSWORD, GD_DATABASE, GD_DB_PORT);

  if (!$connection) {
    print("Could not connect to remote host: " . mysqli_connect_error());
    die("<br />Terminating program </body></html>");
  } else {
    print("MySQL connection on remote host created <br /><br />");
  }
  $db_selected = mysqli_select_db($connection, GD_DATABASE);
  if (!$db_selected) {
    die('Can\'t use ncamag : ' . mysqli_connect_error());
  } else {
    print("avdrms database selected <br /><br />");
  }
} else {
  $connection = mysqli_connect("188.121.40.173", "ncamagellan", "Allie#1993");
  if (!$connection) {
    print("Could not connect to remote host: " . mysqli_connect_error());
    die("<br />Terminating program </body></html>");
  } else {
    print("MySQL connection on remote host created <br /><br />");
  }
  $db_selected = mysqli_select_db($connection, 'ncamagellan');
  if (!$db_selected) {
    die('Can\'t use magellan : ' . mysqli_connect_error());
  } else {
    print("Magellan Database Selected <br /><br />");
  }
}
