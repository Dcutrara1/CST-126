<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_4
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Develop reusable PHP functions and scripts
  as well as work with a Multi-Dimensional Array in PHP.
 */
 
require('myfuncs.php');

$con = dbConnect();

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

$query = "SELECT * FROM user WHERE USERNAME = '$username'";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if (mysqli_affected_rows($con) > 1 )
{
    echo 'There are multiple users have registered <br>';
}
else if($password == $row['password'])
{
    
    saveUserId($row['ID']); // Save User ID in the Session
    include('loginResponse.php');
}
else
{
   $message = "Login Failed";
   include ('loginFailed.php');
}
$con->close();
?>