<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_4
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Develop reusable PHP functions and scripts
  as well as work with a Multi-Dimensional Array in PHP.
 */

require_once 'myfuncs.php';

function getAllUsers()
{
    $users = array();
    $con = dbConnect();
    $query = "SELECT id, first_name, last_name FROM user";    
    $result = mysqli_query($con, $query);

    While($row = mysqli_fetch_array($result))
    {
        $users[] = array($row["id"], $row["first_name"], $row["last_name"]);
    }
    
    mysqli_close($con);
    Return $users;    
}

?>