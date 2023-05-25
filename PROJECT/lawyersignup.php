<?php


session_start();

include ("connection.php"); 
include ("functions.php");


 $form_data = $_POST;

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpassword = "";
 $dbname = "efiling_db";



 if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  //data was posted

  $lawyer_id = $form_data['lawyer_id'];
  $firm_name = $form_data['firm_name'];
  $firm_number = $form_data['firm_number'];
  $lawyer_name = $form_data['lawyer_name'];
  $mobile_number = $form_data['mobile_number'];
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

    $sql = "INSERT INTO lawyers
    (lawyer_id, firm_name, firm_number, lawyer_name, mobile_number, email_address, password)
    VALUES('$lawyer_id', '$firm_name', '$firm_number', '$lawyer_name', ' $mobile_number', '$email_address', '$hashed_password')";

    
    $query = mysqli_query($connection,$sql);
    if($query){
     echo "Registration successful!";
     
     header("Location:lawyer.php");

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
    <title>Lawyer Registration</title>

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
    <div id = "lawyerFields">

        <label>Lawyer ID: </label>
         <input type="text" name= "lawyer_id" placeholder= "Lawyer ID No." id= "lawyerId" required><br> 
    
         <label>Law Firm Name: </label>
         <input type="text" name= "firm_name" placeholder= "Law Firm Name" id= "firmName" required><br> 
    
         <label>Law Firm Registration Number:</label>
         <input type="text" name= "firm_number" placeholder= "Law Firm Number" id= "firmNumber" required><br> 
    
         <label>Lawyer Name:</label>
         <input type="text" name= "lawyer_name" placeholder= "Lawyer Full Name" id= "lawyerName" required><br>
         
         <label>Mobile Number: </label>
         <input type="text" name= "mobile_number" placeholder= "Mobile Number " id= "mobilenumber" required><br> 
    
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