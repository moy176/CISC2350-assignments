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

<div class="login">
	<form name="login_cridentials" action="Home.php" method="post">
		<h1>Welcome to BUZZ</h1>
		<fieldset>
			<label for="user_name">
				<span>User Name</span>
				<input type="text" name="user_name" placeholder="User name" required>
			</label>
		</fieldset>
		<fieldset>
			<label>
				<span>Password</span>
				<input type="text" name="Password" placeholder="Password" required>
			</label>
		</fieldset>
		<input type="submit" value="Submit">
	</form>
	<?php
		//creating variables and assigning them to set peramettors 
		$user_name = "student";
		$Password = "1234";
		
		 if(!empty($_POST['user_name']== $user_name && $_Post['Password']== $Password)):
	 ?>
		// built in function to open main page once cridentials if entered correct
		// followed by conditional statement to verify cridentials
		//soure:http://stackoverflow.com/questions/11024225/open-url-with-php
		
		$open = curl_init("Final Project/Home.php"); 
	<?php endif ?> <!--end of if conditional-->
</div><!-- Log in screen -->
<div>
	<h2>Disclaimer:</h2>
</div>
</body>
</html>

