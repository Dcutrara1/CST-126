<?php
$host = 'us-cdbr-iron-east-02.cleardb.net';
$username = 'bd4f97ffd852e1';
$password = '6b182168';
$database = 'heroku_91ac43a3f6024e6';

$con = mysqli_connect($host, $username, $password, $database);
if(mysqli_error($con))
    die("Connection Failed: " . mysqli_connect_error());
    
    // create short variable names
    $firstname = mysqli_real_escape_string($con, $_POST['FirstName']);
    $lastname = mysqli_real_escape_string($con, $_POST['LastName']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $password = mysqli_real_escape_string($con, $_POST['Password']);
    $finalpassword = hash('SHA256', $password);
    
    $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email','$finalpassword')";
    
    if(!mysqli_query($con, $sql))
    {
        echo 'The name was not added.<br>';
    }
    else
    {
        echo 'Name inserted.<br>';
    }
    
    $con->close();
    ?>