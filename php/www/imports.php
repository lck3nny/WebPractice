<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Using Imports</title>
	</head>
	<body>
		<!-- Including the header file -->
		<?php include "basicHeader.html";?>
		
		<!-- Using a template to populate values -->
		<?php
			$title = "My first post";
			$author = "Liam Kenny";
			$wordCount = 400;
			include "article-header.php";
		?>
		
		<!-- Using a template to populate values -->
		<?php
			$title = "My second post";
			$author = "Liam Kenny";
			$wordCount = 600;
			include "article-header.php";
		?>
		<!-- Including the footer file -->
		<?php include "basicFooter.html"; ?>

	</body>
</html>