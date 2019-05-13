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
    
$SQL = "Select ID, FIRST_NAME, LAST_NAME from Users";
$result = $con->query($SQL);

if($result->num_rows > 0)
{
    // output data for each row
    while($row = $result->fetch_assoc())
    {
        echo "ID: " . $row["ID"]. " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
    }
}
else 
{
    echo "No records found.<br>";
}
$con->close();    
?>