<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
 */

require_once 'myfuncs.php';

function getAllUsers()
{
    $users = array();
    $con = dbConnect();
    $query = "SELECT ID, first_name, last_name FROM user";    
    $result = mysqli_query($con, $query);

    While($row = mysqli_fetch_array($result))
    {
        $users[] = array($row["ID"], $row["first_name"], $row["last_name"]);
    }
    
    mysqli_close($con);
    Return $users;    
}

function getUsersByFirstName($searchPattern)
{
    $users = array();
    $con = dbConnect();
    $search = mysqli_real_escape_string($con, $searchPattern);
    $query = "SELECT * FROM user WHERE first_name LIKE '%$search%'";
    $result = mysqli_query($con, $query);
    
    While($row = mysqli_fetch_array($result))
    {
        $users[] = array($row["ID"], $row["first_name"], $row["last_name"]);
    }
    
    mysqli_close($con);
    Return $users;    
}

?>