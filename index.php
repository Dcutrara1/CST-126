<html>

<head>
	<title>Registration Form</title>
</head>

<body>
	<form action="Controllers/Registration.php" method="post">
		
		<table style="border: 0px;">
			<tr style="background: #cccccc;">
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="FirstName" id="FirstName" size="20"
    			maxlength="20" /></td>
    		</tr>
    
    		<tr>
    			<td>Last Name</td>
    			<td><input type="text" name="LastName" id="LastName" size="20"
        		maxlength="20" /></td>
 			</tr>
 			
 			<tr>
    			<td>Email (Username)</td>
    			<td><input type="email" name="Email" id="Email" size="20"
        		maxlength="20" /></td>
 			</tr>
 			
 			<tr>
    			<td>Password</td>
    			<td><input type="password" name="Password" id="Password" size="20"
        		maxlength="20" /></td>
 			</tr>
        
    		<tr>
        		<td colspan="1" style="text-align: center;">
    			<input type="submit" value="Submit" /></td>
    		</tr>
		</table>
	</form>
</body>
</html>