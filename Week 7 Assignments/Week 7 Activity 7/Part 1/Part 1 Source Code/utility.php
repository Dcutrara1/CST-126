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

function insertUsers()
{
    $users = array
    (
    array('Joe', 'Cool', 'Joey', 'test4'),
    array('Bob'. 'Hope', 'HopeMan', 'test5'),
    array('Ted', 'Bundy', 'stalker', 'test6'),
    array('Jimmy', 'Johns', 'freakyfast', 'test7')
    );
    $con = dbConnect();
    
    for($i=0; $i<count($users); $i++)
    {  
        $first_name = mysqli_real_escape_string($con, $users[$i][0]);
        $last_name = mysqli_real_escape_string($con, $users[$i][1]);
        $username = mysqli_real_escape_string($con, $users[$i][2]);
        $password = mysqli_real_escape_string($con, $users[$i][3]);
    
    
    
    $sql = "INSERT INTO user (first_name, last_name, username, password) VALUES
     ('$first_name', '$last_name', '$username', '$password')";
    mysqli_query($con, $sql);
    }
    mysqli_close($con);  
}

?>