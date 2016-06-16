<?php
  session_start();
  
  include("conf.php");
  
  function authenticate(){
    global $token;
    if(isset($_POST[$token]) and $_POST[$token] == $_SESSION['token']){
      unset($_SESSION['token']);
      $auth = base64_encode(openssl_random_pseudo_bytes(64));
      setcookie("auth", $auth);
      $_SESSION['auth'] = $auth;
      return True;
    }else{
      return is_authenticated();
    }
  }
  
  function is_authenticated(){
    if(isset($_SESSION['auth']) and $_SESSION['auth'] === $_COOKIE['auth']){
      return True;
    }else{
      return False;
    }
  }
  
  function deauthenticate(){
    unset($_SESSION['auth']);
    session_destroy();
    setcookie("auth", "", time() - 3600);
  }
  
  function send_token(){
    global $mail, $address;
    if(isset($_POST[$address])){
      $token = base64_encode(openssl_random_pseudo_bytes(16));
      $_SESSION['token'] = $token;
      $_SESSION['token_timestamp'] = time();
      $headers = "From: ".$mail['sender']." \r\nX-Mailer: PHP/".phpversion();
      mail($_POST[$address], $mail["subject"], $token, $headers);
      return True;
    }else{
      return False;
    }
  }
?>
