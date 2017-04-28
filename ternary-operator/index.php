<!DOCTYPE html>
<html lang="en">
<head>
	<title>
			Ternary Operator Explained
	</title>
	<meta charset="utf-8">
	<style>
		section {
			margin-bottom: 5rem;
		}
	</style>
</head>
<body>
	<section style="display: block;">
		<h1>
			The Ternary Operator
		</h1>
		<p>
			The "Ternary Operator" is used to simplify a conditional statement(i.e If statement). The ternary operator takes three oprands:
		</p>
		<ul>
			<li>conditon</li>
			<li>result = True</li>
			<li>result = False</li>
		</ul>
		<h3>
			Example:
		</h3>
		<p>
			Below we have a if statement
		</p>
	</section>
	<section style="display: block;">
				 	<?php $age=31;?>
					<?php

							if ($age > 21) {
								$agestring = "First rounds on me";
							}
							else
							 {
								$agestring = "Sorry bro, not trying to get arrestted";
							}
						
					?>
			<h1><?php
				echo $agestring;
			?></h1>
	</section>
	<section style="display: block;">
		<p>
			Below is an example of the Ternary Operator
		</p>
		<?php

			$ageTO = ($age > 21 ) ? "First rounds on me" : "Sorry bro, not trying to get arrestted";
		?>
		<h1><?php
			echo $ageTO;//displaying variable
		  ?></h1>
	</section>
	<section>
		<p>
			The Ternary Operator simplifies an ifelse conditionanl statement to a simple piece of code.
			
		</p>
		<h3>
			$ageTO = ($age > 21 ) ? "First rounds on me" : "Sorry bro, not trying to get arrestted";
		</h3>
		<h2>
			                      V.S
		</h2>
		<h3>
			

							if ($age > 21) {<br>
								         $agestring = "First rounds on me";<br>
							}<br>
							else
							 {<br>
								$agestring = "Sorry bro, not trying to get arrestted";<br>
							}
						
					
		</h3>
		
		

	</section>
	<section>
		<p>refrence:</p>
		 <ul>
		 	<li>http://www.hackingwithphp.com/3/12/4/the-ternary-operator<a href="http://www.hackingwithphp.com/3/12/4/the-ternary-operator"></a> </li>
		 </ul>
	</section>
</body>
</html>