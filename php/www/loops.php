<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Loops</title>
	</head>
	<body>
		<h1>Loops</h1>
		<hr>


		<?php 
			// while loops check the condition first and execute second
			$index = 1;
			while($index <= 5){
				echo "$index <br>";
				$index ++; 
			}
			echo "<br>";

			// do while loops execute first and check the condition second  
			do{
				echo "$index <br";
				$index ++;
			}while($index <= 5);
			
			echo "<br> <br> <br>";

			$luckyNumbers = array(4,8,16,5,12);

			// for loops are way more efficient
			for($i = 0; $i <= count($luckyNumbers); $i ++){
				echo "$luckyNumbers[$i] <br>";
			}
		?>
	</body>
</html>