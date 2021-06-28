<?php
session_start();
  include("connection.php");
  include("functions.php");

    if ($_SERVER['REQUEST_METHOD']== "POST")
     {
      // if we post something
      $user_name=$_POST['user_name'];
      $password=$_POST['password'];

      if (!empty ($user_name) && !empty ($password) && !is_numeric ($user_name))
       {
         //read from the database
         $user_id=random_num(20);
          $query ="select * from users where user_name= '$user_name' limit 1";
          $result= mysqli_query($con, $query); //to save

          if ($result)
          {
            if ($result && mysqli_num_rows($result) > 0)
             {
               $user_data=mysqli_fetch_assoc($result);
              if($user_data['password']===$password)
              {
                $_SESSION['user_id']= $user_data['user_id'];
                header("Location: index.php");// redirect the user in login.php
               die;
              }
            }
          }

            echo "The username and password provided is not corret. Please try again later.";

      }else {
        echo "Please enter valid info";
      }
    }

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
