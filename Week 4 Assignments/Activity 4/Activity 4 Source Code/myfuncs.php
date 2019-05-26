
<?php
/*
Project name and version: CST-126 Activity Guide.Activity_4
Programmer Name: Daniel Cutrara
Date: 5/19/2019
Synopsis: Develop reusable PHP functions and scripts
  as well as work with a Multi-Dimensional Array in PHP.
 */
 
function dbConnect()
{
    global $con;
    $host = 'localhost';
    $username = 'dscutrar';
    $password = 'Winner#2';
    $database = 'activitydb';
    
    $con = mysqli_connect($host, $username, $password, $database);
    if(mysqli_error($con))
    {
        die("Connection Failed: " . mysqli_connect_error());
    }
 
    return $con;
}

function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}

function getUserId()
{
    session_start();
    return $_SESSION["USER_ID"];
}

?>