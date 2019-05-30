<html>
<!-- 
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account. 
 Interface for the blog administrator to categorize (tag) and remove posts.
 -->
	<head>
		<meta charset="ISO-8859-1">
		<title>Add Post</title>
	</head>
	<body>
		<form action="AddPostController.php" method="post">
			<input type="text" placeholder="Title" name="title"/>
			<br>
			<textarea name="post" rows="25" cols="50" placeholder="Blog Post"></textarea> 
			<br>
			
			<input type="submit" name="add Post" value="Add Post"/>
			<input type="button" value="View Blog" onclick="location='blogView.php'" />
		</form> 		
<?php
session_start();
if (isset($_SESSION["AddPostErrorMessage"]))
{
    echo '<p>'.$_SESSION["AddPostErrorMessage"].'</p>';
}
?>
	</body>
</html>