<html>
<table>
	<tr>
		<th>ID</th><th>First Name</th><th>Last Name</th>
	</tr>
		 
<?php
for($i=0; $i<count($users); $i++)
    {
        echo"<tr>"."<td>".$users[$i][0]."</td><td>".$users[$i][1]."</td><td>"
        .$users[$i][2]."</td>"."</tr>";
    }
 	
?>
	
</table>
</html>