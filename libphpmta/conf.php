<?php
  $address = "mail";  //POST name for the mail address
  $token = "token"; //POST name for the token
  $token_expire = 60; //token lifetime in seconds
  $mail = [
    "subject" => "Logintoken", //subject for the token mail
    "sender" => "noreply@localhost", //sender address for the token mail
  ];
  
  function is_allowed($mail){
    //Implement an access control for email addresses.
    return True;
  }
?>
