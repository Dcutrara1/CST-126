<?php
/*
 Project name and version: Blog.version_4
 Module name and version: Module 4.version_1
 Programmer Name: Daniel Cutrara
 Date: 5/26/2019
 Synopsis: Create an Azure account and upload all files to your account.
 Interface for the blog administrator to categorize (tag) and remove posts.
 */
?>

<?php 
include 'configdb.php';
$db = dbConnect();

	if (isset($_GET['edit'])) 
	{
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM posts WHERE id=$id");

		if (count($record) == 1 ) 
		{
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
			$author = $n['author'];
            $textarea = $n['textarea'];
		}   	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>   
<body>
    <?php $results = mysqli_query($db, "SELECT * FROM posts"); ?>
  <table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th colspan="2">Text Area</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) 
	{ ?>
		<tr>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>   
            <td><?php echo $row['textarea']; ?></td>
			<td>
				<a href="crud.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php 
	} ?>
</table>
     <form method="post" action="server.php" >
   <!-- This code displays a confirmation message to tell the user that a new record has been created in the database.-->      
   <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
    
    <?php endif ?>
  <!--To retrieve the database records and display them on the page, add this code. -->  

		<div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="">
		</div>
		<div class="input-group">
			<label>Author</label>
			<input type="text" name="author" value="">
		</div>
               <div class="input-group">
			<label>Text Area</label>
			<input type="text" name="textarea" value="">
		</div>
		<div class="input-group">		
		</div>
        
        <div>
             <!--/ newly added field -->
             <input type="hidden" name="id" value="<?php echo $id; ?>">
             <!--/ modified Field -->
             <input type="text" name="title" value="<?php echo $title; ?>">
             <input type="text" name="author" value="<?php echo $author; ?>">
             <input type="text" name="textarea" value="<?php echo $textarea; ?>">
	    
	    </div>
        <p>
           <?php if ($update == true): ?>
	       <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
           <?php else: ?>
	       <button class="btn" type="submit" name="save" >Save</button>
           <?php endif ?>
     	</p>           
	</form>
   </body>
</html>