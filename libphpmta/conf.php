<?php
  $address = "mail";
  $token = "token";
  $token_expire = 60;
  $mail = [
    "subject" => "Logintoken",
    "sender" => "noreply@localhost",
  ];
  
  function is_allowed($mail){
    return True;
  }
?>
