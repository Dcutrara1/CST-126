 <?php
/*
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account. 
 Interface for the blog administrator to categorize (tag) and remove posts.
 */

 // Connect to database
 require('myfuncs.php');
 $con = dbConnect();

// create short variable names
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if(empty(trim($username)))
{
    die('The Username is a required field and cannot be blank.<br>');
    header('Refresh: 5;login.html');
}

if(empty(trim($password)))
{
    die('The Password is a required field and cannot be blank.<br>');
    header('Refresh: 5;login.html');
}

$query = "SELECT * FROM user WHERE email = '$username'";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if (mysqli_affected_rows($con) > 1 )
{
    echo 'There are multiple users have registered <br>';
}
else if($password == $row['password'])
{
    echo 'Login Successful! <br>';
    saveUserId($row['id']); // Save User ID in the Session
    header('Refresh: 2;userView.php');
}
else
{
    echo 'Login failed <br>';
    echo '<a href="login.html">Try Again</a>';
}
$con->close();
?>
