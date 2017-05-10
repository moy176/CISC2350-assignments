<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Employee Data Base
	</title>

	<meta name="viewport" content="width=device-width"/>
	<meta name="description" content="Employee Database"/>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="header">The Buzz</h1>
<section class="login">
	<form>
		<fieldset>
			<label for="f_name">
				<span>Enter empolyee first name</span>
				<input type="text" name="f_name" required>
			</label>
		</fieldset>
		<fieldset>
			<label for="l_name">
				<span>Enter empolyee last name</span>
				<input type="text" name="l_name" required>
			</label>
		</fieldset>
		<fieldset>
			<label for="id_num">
				<span>Enter empolyee id</span>
				<input type="text" name="id_num" required>
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
		if(!$db_conn){
			echo "ERROR"; exit;
		}
	?>
	<?php
	// setting user input to variables
		$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
				$id_num = $_POST['id_num'];
		// inserting inputed variables into database
		$insert_query = " INSERT INTO Empolyee_Database (f_name,l_name,id_num) 
		VALUES ('f_name','l_name','id_num')";
		$prepared_insert = mysqli_prepare($db_conn, $insert_query);
		mysgli_stmt_bind_param($prepared_insert,"ssi", $f_name, $l_name, $id_num);
		$success = mysqli_stmt_execute($prepared_insert);
		$count = mysqli_affected_rows($db_conn);
		mysgli_stmt_close($prepared_insert);
	?>
	<?php
		$DD="SELECT * FROM Empolyee_Database";
		$result = $db_conn->query($DD);

		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $DD;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	?>
</section>
</div><!-- Log in screen -->
</body>
</html>

