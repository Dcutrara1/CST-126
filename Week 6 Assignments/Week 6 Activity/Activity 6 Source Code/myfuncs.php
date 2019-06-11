<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
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