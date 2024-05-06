<?php

/**********************************************************************
 * Check for Valid Session
 **********************************************************************/

if (isset($_SESSION['user_id'])) {
  $valid_session = "yes";
} else {
  session_destroy();
  die("<h3 class='text-info'>&nbsp;&nbsp;&nbsp;Error 608: invalid user session, access denied</h2></head></html>");
}
