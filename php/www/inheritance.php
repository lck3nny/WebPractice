<!DOCTYPE html>
<html>
	<head>
		<meta charset="urf-8">
		<title>Inheritance</title>
	</head>
	<body>
		<?php include "basicHeader.html";?>	

		<?php 
			class Chef{
				function makeChicken(){
					echo "The chef makes chicken <br>";
				}
				function makeSalad(){
					echo "The chef makes salad <br>";
				}
				function makeSpecialDish(){
					echo "The chef makes BBQ ribs <br>";
				}
			}

			class ItalianChef extends Chef{
				function makePasta(){
					echo "The chef makes pasta <br>";
				}
				function makeSpecialDish(){
					echo "The chef makes lasagne <br>";
				}
			}

			$alex = new Chef();
			$alex->makeChicken();

			$becca = new ItalianChef();
			$becca->makeSpecialDish();

		?>
	</body>
</html>