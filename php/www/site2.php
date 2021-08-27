<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=-8">
		<title>PHP Tutorials Pt.2</title>
	</head>
	<body>
		
		<?php 
			echo "<h1>PHP Tutorials Pt.2</h1>";
			echo "<p>This is the second part in the FreeCodeCamp PHP tutorials</p>";
			echo "<hr>"
		?>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<!-- First Example: Associative Arrays 
    			- each key must be unique -->
    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<h3>Associative Arrays</h3>

    	~~~~ Grades ~~~
    	<form action="site2.php" method="post">
    		<input type="text" name="student">
    		<input type="submit">
    	</form>
    	
    	<?php 

    		$grades = array("Jim" => "A+", "Pam" => "B-", "Jenny" => "A-");
    		echo $grades[$_POST["student"]];
    		echo "<hr>";
    	?>

    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<!-- Functions -->
    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<h3>Functions</h3>
    	<?php 

    		function sayHi($name, $age){
    			echo "Hello $name, you are $age";
    			echo "<br>";
    		}

    		sayHi("Mike", 35);
    		sayHi("Liam", 24);
    		echo "<hr>";
    	?>

    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<!-- Return Satements -->
    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<h3>Return Statements</h3>
    	<p>Function will return the cubed result of a number</p>
    	<br>
    	<form action="site2.php" method="post">
    		<input type="text" name="myNum">
    		<input type="submit">
    	</form>

    	<?php 
    		function cubeNum($num){
    			return $num ** 3;
    		}

    		$cubeResult = cubeNum($_POST["myNum"]);
    		echo $cubeResult;
    		echo "<hr>";
    	?>
    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    	<!-- If Satements -->
    	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 		<h3>If Statements</h3>
    	

    	<?php 
    		$isMale = false;
    		$isTall = false;
    		if($isMale && $isTall){
    			echo "The user is a tall male.";
    		}elseif(!$isMale && $isTall){
    			echo "The user is a tall female";
    		}else{
    			echo "The user is not tall.";
    		}
    		echo "<hr>";
    	?>

	</body>
</html>