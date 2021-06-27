<?php
session_start();
include("connection.php");
include("functions.php");

    $user_data= check_login($con); /* check_login($con) is a finction and is in function.php*/

 ?>
 
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login Student Support</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password">
  </div>

  <input type="button" class="btn" value="Sign in">
</div>
  </body>
</html>
