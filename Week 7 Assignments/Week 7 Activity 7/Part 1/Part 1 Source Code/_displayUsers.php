<html>
<!-- 
 Project name and version: CST-126 Activity Guide.Activity_6
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Use SQL Wildcard Searches to search for a pattern.
 -->
<table>
	<tr>
		<th>ID</th><th>First Name</th><th>Last Name</th>
	</tr>
		 
<?php 
	for($i=0; $i<count($users); $i++)
	{
	    echo"<tr>"."<td>".$users[$i][0]."</td><td>".$users[$i][1]."</td><td>".$users[$i][2]."</td>"."</tr>";
	}
	?>
	
</table>
</html>