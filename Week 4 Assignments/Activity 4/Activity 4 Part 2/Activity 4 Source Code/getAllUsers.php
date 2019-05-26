<?php
/*
Project name and version: CST-126 Activity Guide.Activity_4
Programmer Name: Daniel Cutrara
Date: 5/26/2019
Synopsis: Develop reusable PHP functions and scripts
as well as work with a Multi-Dimensional Array in PHP.
*/

$host = 'localhost';
$username = 'dscutrar';
$password = 'Winner#2';
$database = 'activity1';

$con = mysqli_connect($host, $username, $password, $database);
if(mysqli_error($con))
{
    die("Connection Failed: " . mysqli_connect_error());
}
    
$SQL = "Select id, first_name, last_name from Users";
$result = $con->query($SQL);

if($result->num_rows > 0)
{
    // output data for each row
    while($row = $result->fetch_assoc())
    {
        echo "ID: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
}
else 
{
    echo "No records found.<br>";
}
$con->close();    
?>