<?php
/*
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account. 
 Interface for the blog administrator to categorize (tag) and remove posts.
 */
 
function dbConnect()
{
    global $con;
    $host = 'dan-blog-mysqldbserver.mysql.database.azure.com';
    $username = 'mysqldbuser@dan-blog-mysqldbserver';
    $password = 'BlogPass1';
    $database = 'dan-blog';
    
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

function forbiddenWords($post)
{
    
    $forbiddenWords = array("Army", "Navy", "Air Force", "AirForce", "Homework", "Assignments", "Work");
    
    foreach($forbiddenWords as $word)
    {
        if(stristr($post, $word))
            return true;
    }
    return false; 
}

function getAllPosts()
{
    $posts = array();
    $con = dbConnect();
    $sql = "Select * from posts";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $posts[] = array($row['id'], $row['posttitle'], $row['userid'], $row['post']);
    }
    mysqli_close();
    return $posts;
}

function getUsersPosts()
{
    $posts = array();
    $con = dbConnect();
    $user = mysqli_escape_string($con, getUser());
    $sql = "Select * from posts where userid='$user'";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $posts[] = array($row['id'], $row['posttitle'], $row['userid'], $row['post']);
    }
    mysqli_close();
    return $posts;
}


?>