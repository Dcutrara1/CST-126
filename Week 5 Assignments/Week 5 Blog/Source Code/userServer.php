<?php
/*
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account.
 Interface for the blog administrator to categorize (tag) and remove posts.
 */

require('myfuncs.php');
$con = dbConnect();

if(!isset($_POST['update']))
{
    $firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($con, $_POST["lastname"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $admin = mysqli_real_escape_string($con, $_POST["admin"]);
}
else
{
    $firstname = mysqli_real_escape_string($con, $_POST["updateFirstname"]);
    $lastname = mysqli_real_escape_string($con, $_POST["updateLastname"]);
    $email = mysqli_real_escape_string($con, $_POST["updateEmail"]);
    $password = mysqli_real_escape_string($con, $_POST["updatePassword"]);
    $admin = mysqli_real_escape_string($con, $_POST["updateAdmin"]);
   
}


if(isset($_GET['del']))
{
    $id = mysqli_real_escape_string($con, $_GET['del']);
    $sql = "Delete from user where id='$id'";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('Location: userManager.php');
    exit;
}

if(isset($_POST['save']))
{        
    $sql = "INSERT INTO user (firstname, lastname, email, password, admin)
	VALUES ('$firstname', '$lastname', '$email', '$password', '$admin');";
        
        if(mysqli_query($con, $sql))
        
        {
            $_SESSION["AddPostErrorMessage"] = "Post was added to database.";
            echo 'Post was added to database. <br>';
            header('Refresh: 2;userManager.php');
        }
        else
        {
            $_SESSION["AddPostErrorMessage"] = "Post was NOT added to database.";
            header('Refresh: 2;userManager.php');
        }
        exit();
}
if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    
    $sql = "UPDATE user SET firstName='$firstname', lastname='$lastname',
    email='$email', password='$password', admin='$admin' id='$id'";

    if(mysqli_query($con, $sql))
    {
        $_SESSION["AddPostErrorMessage"] = "Records were updated successfully.";
        echo 'Post was added to database. <br>';
        header('Refresh: 2;userManager.php');
    } 
    else
    {
        $_SESSION["AddPostErrorMessage"] = "Unable to update records.";
        header('Refresh: 2;userManager.php');
    }
    mysqli_close($con);
    header('Location: userManager.php');
    exit();
}
?>