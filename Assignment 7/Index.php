<!DOCTYPE html>
<html lang="en">
<head>
	<title>
			Assignment 7
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
	// $FF1 = "Stew Peas";
	// $FF2 = "Pizza";
	// $FF3 = "Fried Chicken";

	$food = array("Stew Peas", "Pizza", "Fried Chicken");
	// Four favorite classes
	// $class1 = "Information and Web Programing";
	// $class2 = "Cyber Security and Applications";
	// $class3 = "Secure Cyber Network";
	// $class4 = "Discrete Structures";

	$class = array("Information and Web Programing", "Cyber Security and Applications"
		, "Secure Cyber Network", "Discrete Structures");

	$earned_credits = 109;
	$total_credits = 124;
	$credits_needed = $total_credits-$earned_credits;
?>

<h1>
	<?php echo "Favorite Foods"; ?>
</h1>
<h2>
	<ul>
		<li><?php echo $food[0]; ?></li>
		<li><?php echo $food[1]; ?></li> 
		<LI><?PHP echo $food[2]; ?></LI>
	</ul>
</h2>
<h1>
	<?php echo "Classes Taken"; ?>
</h1>
<h2>
	<ul>
		<li><?php echo $class[0]; ?></li>
		<li><?php echo $class[1]; ?></li>
		<LI><?PHP echo $class[2]; ?></LI>
		<LI><?PHP echo $class[3]; ?></LI>
	</ul>
</h2>

<h2><?php 
	if($earned_credits <= 30){
		echo "I am Classified as a Freshman";
		$next_grade= 30 - $earned_credits;

		echo "I need ", $next_grade, " credits to become a Sophomore";
	}
	else
	if($earned_credits > 30 && $earned_credits < 60){
		echo "I am Classified as a Sophomore";
		$next_grade= 60 - $earned_credits;
		echo "I need ", $next_grade, " credits to become a Junior";
		}
	else
	if($earned_credits > 60 && $earned_credits < 92){
		echo "I am Classified as a Junior";
		$next_grade=92 - $earned_credits;
		echo "I need ", $next_grade, " credits to become a Senior";
	}
	else
	if($earned_credits > 92){
		echo "I am Classified as a Senior. ";
		$next_grade= 124 - $earned_credits;
		echo "I need ", $next_grade, " credits to Graduate";
	}

?></h2>
</body>
</html>