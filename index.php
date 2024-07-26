<?php

/**********************************************************************
 * Main landing page for AVWHIMS Application
 * 
 * On each visit here, the user session is cleared and user must
 * reauthenticate via login/password or OAuth 2.0 flow with Okta.
 **********************************************************************/

declare(strict_types=1);

session_start();
session_destroy();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="WHIMS Women's Health Management Reference Application">
  <meta name="author" content="csylvester">
  <link rel="shortcut icon" href="./_resource/image/star-logo.png">
  <link rel="stylesheet" href="./_resource/style/main.css">
  <title>AVWHIMS</title>

  <!-- JS script to clear cookie session variable so startup modal displays on first visit -->
  <script>
    sessionStorage.removeItem('accepted');
  </script>
</head>

<body>
  <main>
    <div class="card">
      <h1>Women's Health SMART App</h1>
      <p class="tagline">This is a restricted website for authorized use only.</p>
      <form class="form-signin" method="post" action="./_include/validate.php">
        <h2>Please log in</h2>
        <label for="user-name">Username</label>
        <input type="text" name="user-name" autofocus size="32">
        <label for="user-password">Password</label>
        <input type="password" name="user-password" size="32">
        <br>
        <input type="checkbox" name="remember-me" value="remember-me"> Remember me
        <br><br>
        <input class="btn" type="submit" name="submit" value="Log In">
        <a href="./about/">I need help logging in</a>
        <br><br>
        <hr><br>
        <input class="btn-sso" type="submit" name="submit" value="Log In using Single Sign-On">
      </form>
    </div>
    <footer>
      <?php
      include "./_include/footer.php";
      ?>
    </footer>
  </main>
</body>

</html>