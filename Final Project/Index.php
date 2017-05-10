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
<section class="Sec_center">
	<div class="login" class="center">
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
			<h2>About:</h2>
			<h3>
				Buzz is an Secure database used to store and update employee information. Please enter your cridentials about to gain access to Buzz
			</h3>
		</form>
		<?php
			//creating variables and assigning them to set peramettors 
			$user_name = "student";
			$Password = "student";
			?>
		<?php	 if(!empty($_POST['user_name']== $user_name && $_Post['Password']== $Password)):?>
		<?php
			// built in function to open main page once cridentials if entered correct
			// followed by conditional statement to verify cridentials
			//soure:http://stackoverflow.com/questions/11024225/open-url-with-php

			$open = curl_init("Final Project/Home.php"); 
			curl_exec($open);
		?>
		<?php endif ?> <!--end of if conditional (for correct password)-->
		<?php if(!empty($_POST['user_name']== $user_name && $_Post['Password']== $Password)):?>
			<?php
				echo "invalid cridentials";?>
			<?php endif ?>
	</div>
</section><!-- Log in screen -->
<section>
	
</section>
</body>
</html>

