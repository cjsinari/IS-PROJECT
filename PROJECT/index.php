<?php

session_start(); 
  
include ("connection.php");
include ("functions.php");

$user_data = check_login($connection);



?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href = "styleproject.css">
    <script src="signup.js"></script>
    <title>Kortitrak: Judiciary e-filing system</title>

<center><h1>WELCOME TO KORTITRAK: JUDICIARY OF KENYA E-FILING SYSTEM</h1> </center> 

<div class="mydiv">
<div class="dropdown">
    <button class= "drop-button">Register
    <i class="fa fa-caret-down"></i>
    </button>
      
    <div class="dropdown-content">
    <a href="clientsignup.php" target="_blank">Individual</a>
    <a href="lawyersignup.php" target="_blank">Lawyer</a>
    <a href="judgesignup.php" target="_blank">Judge</a>
    
      </div>
   </div>
    <a href="login.php" target="_blank">Log in</a>
    <a href="customerservice.html" target="_blank">Customer  Service</a>
    <a href="help.html" target="_blank">Help</a>
    <a href="contact.html" target="_blank">Contact Us</a>

</div>

</head>

<body> 
   
<img src="law scales.jpeg" width="100%" height="100%">


<div class = "text-container">
    <div class = "welcome-text">
    <h2>Welcome to Kortitrak</h2>


    </div>


</div>  


</body>
</html>