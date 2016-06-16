<!doctype html>
<head>
<?php
  include('../libphpmta/auth.php');
  if(is_authenticated()){
    ?>
      <head>
        <title>Logged In</title>
      </head>
      <body>
        <p>You are logged in!</p>
        <form action="logout.php">
          <input type="submit" value="Logout"/>
        </form>
      </body>
    <?php
  }else{
    header("Location: login.php");
  }
?>
</head>
