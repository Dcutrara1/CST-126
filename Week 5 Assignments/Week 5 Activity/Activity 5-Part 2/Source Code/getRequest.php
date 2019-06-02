<?php

/*
 Project name and version: CST-126 Activity Guide.Activity_5
 Programmer Name: Daniel Cutrara
 Date: 6/01/2019
 Synopsis: Create an HTTP GET Request.
 */

if( $_GET["id"] || $_GET["mode"] ) 
{
    echo "Data sent to the getRequest.php script." ."<br />";
    echo "ID: " . $_GET['id']. "<br />";
    echo "Mode: " . $_GET['mode']. "<br />";
    echo  "<br />";
    
    echo "The data sent to the getRequest.php script will change in 5 seconds." ."<br />";
        
    header('Refresh: 5;getRequest.php?id=5&mode=5');   
    
    if($_GET['id'] == 5)
    {
        header('Refresh: 5;index.html'); 
    }
}   
    exit();
?>

