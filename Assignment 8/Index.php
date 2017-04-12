<!DOCTYPE html>
<html lang="en">
<head>
	<title>
			Assignment 8
	</title>
	<meta charset="utf-8">
	<style>
		section {
			margin-bottom: 5rem;
		}
	</style>
</head>
<body>

<h3>
	<?php
		 $Fname = "Kemoye";
		 $Lname = "Roberts";

		 $students = array(
							'rick' => 124,
							'morty' => 24,
							'summer' => 48,
							'beth' => 75,
							'jerry' => 32,
							'bird_man' => 97
						);
	?>

	<?php
	function get_student_year(){

		$earned_credits = 75;
		$total_credits = 124;
		$credits_needed = $total_credits-$earned_credits;

		if($earned_credits <= 30){
			echo "I am Classified as a Freshman. ";
		}
		else
		if($earned_credits > 30 && $earned_credits < 60){
			echo "I am Classified as a Sophomore. ";
			}
		else
		if($earned_credits > 60 && $earned_credits < 92){
			echo "I am Classified as a Junior. ";
		}
		else
		if($earned_credits > 92){
			echo "I am Classified as a Senior. ";
		}

	}//end of get student year functions
	?>

</h3>
<h3>
	<?php 
	function get_grad_credits(){
		$earned_credits = 75;
		$total_credits = 124;
		$credits_needed = $total_credits-$earned_credits;

		echo "I need ", $credits_needed, " credits to graduate Fordham University.";
	}//end of graduation credit function
	?>
</h3>
<h3>
	<?php

		function get_next_level(){


		$earned_credits = 75;
		$total_credits = 124;
		$credits_needed = $total_credits-$earned_credits;

		if($earned_credits <= 30){
			$next_grade= 30 - $earned_credits;
			echo " I need ", $next_grade, " credits to become a Sophomore.";
		}
		else
		if($earned_credits > 30 && $earned_credits < 60){
			$next_grade= 60 - $earned_credits;
			echo " I need ", $next_grade, " credits to become a Junior.";
			}
		else
		if($earned_credits > 60 && $earned_credits < 92){
			$next_grade=92 - $earned_credits;
			echo " I need ", $next_grade, " credits to become a Senior.";
		}
		else
		if($earned_credits > 92){
			$next_grade= 124 - $earned_credits;
			echo " I need ", $next_grade, " credits to Graduate.";
		}

	}//end of get next level function
	?>
</h3>
<section style="display:block;">
		<div>
			<h1>
				Part 1: Functions
			</h1>
			<h3>
				<?php
					// function calls
					get_student_year();
					echo "<br>";
					get_grad_credits();
					echo "<br>";
					get_next_level();
				?>
			</h3>
		</div>
		<div>
			<h1>
				Part 2: Loops
			</h1>
			<h3>
				<?php
					//Display array of students in a list
					foreach ($students as $name => $creds) {
						echo "<li> $name has $creds credits</li>";
					}
				?>
			</h3>
		</div>
		<div>
			<h1>
				Part 3: Built-in Functions 
			</h1>
			<h3>
				<?php
						//sorts array alphabethically
						ksort($students); 
						foreach ($students as $name => $creds) {
							//Turn first letter in string to upper case
							$name=ucfirst($name);
							//removes all specified special charactors from strings
							$cleanname=preg_replace("/[^a-zA-Z]/", " ", $name);
						echo "<li> $cleanname has $creds credits</li>";
					}
				?>
			</h3>
		</div>
</section>

</body>
</html>