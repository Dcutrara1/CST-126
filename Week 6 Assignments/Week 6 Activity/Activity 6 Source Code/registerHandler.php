<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
 */

require ('myfuncs.php');

$con = dbConnect();

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

$sql = "INSERT INTO user (first_name, last_name, username, password) VALUES
     ('$first_name', '$last_name', '$username', '$password')";

if(!mysqli_query($con, $sql))
{
    echo 'The name was not added.<br>';
}
else
{
    echo 'Name inserted.<br>';
    echo '<a href="index.html">Home</a>';
}

$con->close();
?>