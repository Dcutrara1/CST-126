<?php
/*
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
 */

require_once('utility.php');

$con = dbConnect();

// create short variable names
$searchPattern = mysqli_real_escape_string($con, $_POST['searchPattern']);
$users = getUsersByFirstName($searchPattern);

if(empty(trim($searchPattern)))
{
    die('A search pattern is required and cannot be blank.<br>');
}

if ($users == null)
{
    echo 'There are no users found based on the search criteria. <br>';
}
else 
{
    echo '<h3>Search Results</h3>';
    include('_displayUsers.php');
}
?>

<a href="index.html">Main Menu</a>
<a href="search.html">Search Again</a>