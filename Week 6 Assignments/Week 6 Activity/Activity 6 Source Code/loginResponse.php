<?php 
/*
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
*/
    require_once('utility.php'); 
    $username = getAllUsers();
    include('_displayUsers.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>My Activity 6 Application</title>
</head>

<h2>Login was successful: <?php echo " " . $username . "<br>"?></h2>

<a href="whoAmI.php">Who Am I</a>

</body>
</html>