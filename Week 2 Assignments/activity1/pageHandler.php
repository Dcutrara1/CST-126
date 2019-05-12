<?php

    $host = 'localhost'; 
    $username = 'dscutrar';
    $password = 'Winner#2';
    $database = 'activity1';
    
    $con = mysqli_connect($host, $username, $password, $database);
    if(mysqli_error($con))
        die("Connection Failed: " . mysqli_connect_error());
    
    // create short variable names
    $FIRST_NAME = mysqli_real_escape_string($con, $_POST['FirstName']);
    $LAST_NAME = mysqli_real_escape_string($con, $_POST['LastName']);
    
    if(empty(trim($FIRST_NAME)))
    {
        die('The First Name is a required field and cannot be blank.<br>');
    }
    
    if(empty(trim($LAST_NAME)))
    {
        die('The Last Name is a required field and cannot be blank.<br>');
    }
    
    $sql = "INSERT INTO users (FIRST_NAME, LAST_NAME) VALUES ('$FIRST_NAME', '$LAST_NAME')";
    
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