<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GPA Calculator</title>
	</head>
	<body>
		<h1>GPA Calculator</h1>
		<hr>

		<form action="GPACalculator.php" method="post">
			What is your grade? <br>
			<input type="text" name="grade"> <br>
			<input type="submit">
		</form>

		<?php 
			$grade = $_POST["grade"];
			switch($grade){
				case "A":
					echo "You did great!";
					break;
				case "B":
					echo "You could have done better.";
					break;
				case "C":
					echo "You did average.";
					break;
				case "D":
					echo "You didnt perform well.";
					break;
				case "E":
					echo "You couldn't have done much worse.";
					break;
				case "F":
					echo "You failed!";
					break;
				default:
					echo "Invalid grade.";
					 break;
			}
		?>
	</body>
</html>
