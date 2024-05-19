<?php

/**********************************************************************
 * This script is called by the landing page login form to set things
 * up to login via traditional username/password or via an OAuth 2.0
 * connection using a service registered with Okta.
 **********************************************************************/

session_start();

include './_include/config.php';

// get user-selected action from sign-in form (can't remeember why it's being filtered)
$action = htmlspecialchars($_POST['submit']);

// based on sign-in page user selection, include proper script to continue startup flow
if ($action == 'Log In') {
  include './login.php';
} elseif ($action == 'Log In using Single Sign-On') {
  include './sso.php';
}
