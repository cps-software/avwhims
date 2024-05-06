<?php

/**********************************************************************
 * This script is called by the landing page login form to set things
 * up to login via traditional username/password or via an OAuth 2.0
 * connection using a service registered with Okta.
 **********************************************************************/

session_start();

echo "[01] Script: validate.php<br>";

include './_include/config.php';

echo "[02] Script: validate.php<br>";

// get credentials from sign-in form and verify valid input

$action = htmlspecialchars($_POST['submit']);

if ($action == 'Log In') {
  echo "[03] Script: validate.php<br>";
  include './login.php';
} elseif ($action == 'Log In using Single Sign-On') {
  echo "[04] Script: validate.php<br>";
  include './sso.php';
}
