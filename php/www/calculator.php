<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Calculator</title>
	</head>
	<body>
		<h1>Calculator</h1>

		<form action="calculator.php" method="post">
			Num 1: <input type="number" step="0.1" name="num1"> <br>
			Num 2: <input type="number" step="0.1" name="num2"> <br>
			Operator: <input type="text" name="operator"> <br>
			<input type="submit">
		</form>

		<?php 
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$op = $_POST["operator"];

			if($op == "+"){
				echo $num1 + $num2;
			}elseif($op == "-"){
				echo $num1 - $num2;
			}elseif($op == "*"){
				echo $num1 * $num2;
			}elseif($op == "/"){
				echo $num1 / $num2;
			}else{
				echo "invalid operator";
			}

		?>
	</body>
</html>