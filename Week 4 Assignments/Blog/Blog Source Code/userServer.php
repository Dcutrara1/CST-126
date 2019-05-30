<?php
/*
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account.
 Interface for the blog administrator to categorize (tag) and remove posts.
 */

//Get database connection
require('myfuncs.php');
$conn = dbConnect();

//Get Variables
$title = mysqli_real_escape_string($conn, $_POST["title"]);
$author = mysqli_real_escape_string($conn, $_POST["author"]);
$textarea = mysqli_real_escape_string($conn, $_POST["textarea"]);
$userid = mysqli_real_escape_string($conn, getUserId());

if(forbiddenWords($textarea))
{
    $_SESSION["AddPostErrorMessage"] = "There was one or more words you used that are forbidden.";
    header('Refresh: 2;userView.php');
    exit;
}
else
    $_SESSION["AddPostErrorMessage"] = null;
    
    if(strlen($textarea) > 10000)
    {
        $_SESSION["AddPostErrorMessage"] = "Your post was too long, start over.";
        header('Refresh: 2;userView.php');
        exit;
    }
    
    $sql = "INSERT INTO posts (userid, title, author, textarea)
    VALUES ('$userid', '$title', '$author', '$textarea');";
    if(mysqli_query($conn, $sql))
    {
        $_SESSION["AddPostErrorMessage"] = "Post was added to database.";
        echo 'Post was added to database. <br>';
        header('Refresh: 3;userView.php');
    }
     else 
     {
         $_SESSION["AddPostErrorMessage"] = "Post was NOT added to database.";  
         header('Refresh: 5;userView.php');
     }
?>
