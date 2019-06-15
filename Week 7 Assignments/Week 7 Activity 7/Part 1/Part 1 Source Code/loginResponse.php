<?php 
/*
 Project name and version: CST-126 Activity Guide.Activity_7
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Execute a SQL prepared statement.
*/
    require_once('utility.php'); 
   insertUsers(); 
    $users = getAllUsers();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>My Activity 7 Application</title>
	</head>
	<body>
		<h2>Login was successful: <?php echo " ".$username ?></h2><br>
		<?php include ('_displayUsers.php'); ?>
		<a href="whoAmI.php">Who Am I</a>
	</body>
</html>