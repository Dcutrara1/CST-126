<?php 
/*
Project name and version: CST-126 Activity Guide.Activity_4
Programmer Name: Daniel Cutrara
Date: 5/19/2019
Synopsis: Make refactor code into reusable functions and call these functions within an application.
*/
    require_once('utility.php'); 
    $users = getAllUsers();
    include('_displayUsers.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>My Activity 4 Application</title>
</head>

<h2>Login was successful: <?php echo " " . $username . "<br>"?></h2>

<a href="whoAmI.php">Who Am I</a>

</body>
</html>

