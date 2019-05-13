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
$first_name = mysqli_real_escape_string($con, $_POST['FirstName']);
$last_name = mysqli_real_escape_string($con, $_POST['LastName']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if(empty(trim($first_name)))
{
    die('The First Name is a required field and cannot be blank.<br>');
}

if(empty(trim($last_name)))
{
    die('The Last Name is a required field and cannot be blank.<br>');
}

if(empty(trim($username)))
{
    die('The Username is a required field and cannot be blank.<br>');
}

if(empty(trim($password)))
{
    die('The Password is a required field and cannot be blank.<br>');
}

$sql = "INSERT INTO user (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES
     ('$first_name', '$last_name', '$username', '$password')";

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