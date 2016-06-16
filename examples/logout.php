<?php
  include("../libphpmta/auth.php");
  deauthenticate();
  header("Location: login.php");
?>
