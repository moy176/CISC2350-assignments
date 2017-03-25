<!DOCTYPE html>
<html lang="en">
<head>
	<title>
			Assignment 6
	</title>
	<meta charset="utf-8">
</head>
<body>

<?php
/*
	PHP variables. 
*/
	$Fname = "Kemoye";
	$Lname = "Roberts";
	$DOB = "March 7th";

	// Three favortie foods
	$FF1 = "Stew Peas";
	$FF2 = "Pizza";
	$FF3 = "Fried Chicken";

	// Four favorite classes
	$class1 = "Information and Web Programing";
	$class2 = "Cyber Security and Applications";
	$class3 = "Secure Cyber Network";
	$class4 = "Discrete Structures";
?>
<h1>
	<?php echo "Favorite Foods"; ?>
</h1>
<h2>
	<ul>
		<li><?php echo $FF1; ?></li>
		<li><?php echo $FF2; ?></li>
		<LI><?PHP echo $FF3; ?></LI>
	</ul>
</h2>
<h1>
	<?php echo "Classes Taken"; ?>
</h1>
<h2>
	<ul>
		<li><?php echo $class1; ?></li>
		<li><?php echo $class2; ?></li>
		<LI><?PHP echo $class3; ?></LI>
		<LI><?PHP echo $class4; ?></LI>
	</ul>
</h2>

</body>
</html>