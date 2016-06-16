<?php
  include("../libphpmta/auth.php");
  if(authenticate()){
    header("Location: index.php");
  }elseif(send_token()){
    ?>
      <!doctype html>
      <html>
        <head>
          <title>Login</title>
        </head>
        <body>
          <form action="login.php" method="POST">
            <input type="text" placeholder="token" name="token"/>
            <input type="submit" value="Login"/>
          </form>
        </body>
      </html>
    <?php
  }else{
    ?>
      <!doctype html>
      <html>
        <head>
          <title>Login</title>
        </head>
        <body>
          <form action="login.php" method="POST">
            <input type="text" placeholder="email" name="mail"/>
            <input type="submit" value="Login"/>
          </form>
        </body>
      </html>
    <?php
  }
?>
