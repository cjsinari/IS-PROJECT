<?php

//client login function
function check_login($connection){
    if (isset($_SESSION['first_name']))
    {
        $id = $_SESSION['first_name'];
        $query = "SELECT * FROM clients WHERE first_name = '$id' limit 1";
   
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

        //redirect to login
        header ("Location: client.php");
        die;
    }

    
//lawyer login function
    if(isset($_SESSION['lawyer_id']))
    {
        $id = $_SESSION['lawyer_id'];
        $query = "SELECT * FROM lawyers WHERE lawyer_id = '$id' limit 1";
   
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
       //redirect to login
        header ("Location: lawyer.php");
        die;
    }

    //judge login function
 
    if(isset($_SESSION['judge_name']))
    {
        $id = $_SESSION['judge_name'];
        $query = "SELECT * FROM judges WHERE judge_name = '$id' limit 1";
   
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
       //redirect to login
        header ("Location: judge.php");
        die;
    }
     



    
    /*
    if(isset($_SESSION['email_address']))
    {
        $id = $_SESSION['email_address'];
        $query = "SELECT * FROM clients WHERE email_address = '$id' limit 1";
   
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
       //redirect to login
        header ("Location: client.php");
        die;

    }


    if(isset($_SESSION['email_address']))
    {
        $id = $_SESSION['email_address'];
        $query = "SELECT * FROM lawyers WHERE email_address = '$id' limit 1";
   
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
       //redirect to login
        header ("Location: lawyer.php");
        die;

    }

*/

}

if (isset($form_data['register'])){
    $nationality = $form_data['nationality'];
}