<?php

    $host = 'localhost';
    $username = 'dscutrar';
    $password = 'Winner#2';
    $database = 'activity1';

    $con = mysqli_connect($host, $username, $password, $database);
    if(mysqli_error($con))
    {
        die("Connection Failed: " . mysqli_connect_error());
    }

    // create short variable names
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if(empty(trim($username)))
    {
        die('The Username is a required field and cannot be blank.<br>');
    }

    if(empty(trim($password)))
    {
        die('The Password is a required field and cannot be blank.<br>');
    }
    
    $finalpassword = hash('SHA256', $password);
    echo $finalpassword;
    
    $query = "SELECT * FROM user WHERE USERNAME ='$username'";  

    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    echo mysqli_affected_rows($con);
    
    $row = mysqli_fetch_array($result);
   
    // if($finalpassword == $row['PASSWORD'])
    if (password_verify($finalpassword, $row['PASSWORD'])) 
   {
       echo 'Login was successful <br>';    
   }
   else if (mysqli_affected_rows($con) > 1 )
   {
       echo 'There are multiple users have registered <br>';
   }
   else
   {
       echo 'Login failed <br>';
   }
$con->close(); 
?>