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
 
  $email_address = $form_data['email_address'];
  $password =  $form_data['password'];

  //hash the password in the database
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 

//insert data to database

  $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

  if($connection == true){

    //query the database to get user's information
    $sql = "SELECT * FROM clients WHERE email_address='$email_address' AND password='$password'";
  
    $result = mysqli_query($connection, $sql);

    //check if the user exists 
     if($result){
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['email_address'] = $email_address;
            $_SESSION['password'] = $password;

                header("Location:client.php");
                die;
            }        
          }
    
      die("Something went wrong : ".mysqli_error($connection));
   
  } else{
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

    <title>Kortitrak: Judiciary e-filing system</title>

<center><h1>KORTITRAK: JUDICIARY OF KENYA E-FILING SYSTEM</h1></center> 

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
    
<p>   

   
</div>

<div class = "image-container">


<div class="form">

<h2>Judiciary E-filing</h2>     
<div><input type="email" name="emailaddress" placeholder="Enter email address" required><br>
<div><input type="password" name="password" placeholder="Enter password" required><br>
<input type="checkbox"><label form="rememberme">Remember me</label>
<div><input type="submit"  name="Submit" value="Log in" id= "login-button"><br>
<a href="password.html" class= "link"><p2 class="password">Forgot password?</p2></a><br>


<p3>Don't have an account? <br> <a href="signup.php"> Register here </p3></a><br>


</div>
</div>  


</body>
</html>