<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Employee Data Base
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Employee Database"/>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="header">The Buzz</h1>
<section >
	<form name="empolyee input" action="Home.php" method="post" class="login">
		<fieldset>
			<label for="Employee_Database">
				<span>Enter empolyee first name</span>
				<input type="text" name="f_name" for="f_name">
			</label>
		</fieldset>
		<fieldset>
			<label for="Employee_Database">
				<span>Enter empolyee last name</span>
				<input type="text" name="l_name" for="l_name">
			</label>
		</fieldset>
		<fieldset>
			<label for="Employee_Database">
				<span>Enter empolyee id</span>
				<input type="text" name="id_num" for="id_num">
			</label>
		</fieldset>
		<input type="submit" value="Submit">
	</form>
</section>
<section>
<!-- connecting to local database -->
	<?php 
		$db_hostname = 'localhost';
		$db_database = 'Employee_Database';
		$db_username = 'root';
		$db_password = 'root';

		$db_conn = mysql_connect($db_hostname, $db_username, $db_password, $db_database);
// check for successful connection to local database
// if connection not made exit
		if($db_conn -> connect_error){
			die("failed connection: " . $db_conn ->connect_error);
		}
		else{
	// setting user input to variables
		$f_name = $_POST['f_name'];

			$l_name = $_POST['l_name'];
				$id_num = $_POST['id_num'];
		// inserting inputed variables into database
		$insert_query = " INSERT INTO Empolyee_Database (f_name,l_name,id_num) 
		VALUES (?,?,?)";

		$prepared_insert = mysqli_prepare($db_conn, $insert_query);
		mysgli_stmt_bind_param($prepared_insert,"ssi", $f_name, $l_name, $id_num);

		$success = mysqli_stmt_execute($prepared_insert);
		$count = mysqli_affected_rows($db_conn);
		mysgli_stmt_close($prepared_insert);
	}
	?>
	<p class="login">
	<?php
		"SELECT * FROM Empolyee_Database";
	
		?>
		</p>
	
</section>
</div><!-- Log in screen -->
</body>
</html>

