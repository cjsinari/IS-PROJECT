<?php

include ("connection.php"); 
include ("functions.php");


 $form_data = $_POST;

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpassword = "";
 $dbname = "efiling_db";



 if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  //data was posted

  
  $judge_id = $form_data['judge_id'];
  $judge_name = $form_data['judge_name'];
  $station = $form_data['station'];
  $email_address = $form_data['email_address'];
  $password =  $form_data['password'];
  $password_confirm = $form_data['password_confirm'];

  //hash the password in the database
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

     
  if ($password != $password_confirm){
    echo "Passwords do not match!";
    exit;
  }

  
  $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

  if($connection == true){

    $sql = "INSERT INTO judges
    (judge_name, judge_id, station, email_address, password)
    VALUES('$judge_name', '$judge_id', '$station', '$email_address', '$hashed_password')";

    
    $query = mysqli_query($connection,$sql);
    if($query){
     echo "Registration successful!";
     
     header("Location:judge.php");

   }  else{
      die("Something went wrong : ".mysqli_error($connection));
   }

 }else{
    //not okay
    //stop execution with the error message
   die("There is a problem : ".mysqli_connect_error());
}



}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href = "styleproject.css">
    <script src="signup.js"></script>
    <title>Judge Registration</title>


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
    <a href="log.html" target="_blank">Log in</a>
    <a href="customerservice.html" target="_blank">Customer  Service</a>
    <a href="help.html" target="_blank">Help</a>
    <a href="contact.html" target="_blank">Contact Us</a>
</div>


</head>
<body>
     

    <form method= "post">
    <div id = "judgeFields">

        <label> Judge Name</label>
         <input type="text" name= "judge_name" placeholder= "Enter first and last name" id= "judgeName" required><br> 
    
         <label>Judge ID:</label>
         <input type="text" name= "judge_id" placeholder= "Judge ID" id= "judgeId" required><br> 

         <label>Station</label>
         <input type="text" name= "station" placeholder= "Assigned Court Station" id= "station" required><br> 
    
         <label>Email Address</label>
         <input type="email" name= "email_address" placeholder= "Enter your email address" id= "emailaddress" required><br> 
    
         <label>Password</label>
         <input type="password" name= "password" placeholder= "Enter your password" id= "password" required><br> 
    
         <label>Confirm Password</label>
         <input type="password" name= "password_confirm" placeholder= "Confirm your password" id= "passwordConfirm" required><br> 
    
    
       </div>
     
       <input type="submit" name= "submit" value="Register" id= "submit-button"><br> 
    
    </form>










</body>
</html>