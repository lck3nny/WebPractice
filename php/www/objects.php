<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Objects and Classes</title>
	</head>
	<body>
		<?php include "basicHeader.html";?>

		<?php 
			class Book {
				public $title;
				public $author;
				public $pages;
				private $rating;
				// this private attribute cannot be changed outside of the class
				private $ratings = ["Unrated", "Kids", "Teen", "Adult"];

				function __construct($myTitle, $myAuthor, $myPages, $myRating){
					$this->title = $myTitle;
					$this->author = $myAuthor;
					$this->pages = $myPages;
					// using the setRating function, an invalid rating cannot be added inside the constructor. 
					$this->setRating($myRating);
				}

				function getRating(){
					return $this->rating;
				}

				function setRating($myRating){
					$this->rating = $myRating;
					if($myRating == "Kids" || $myRating == "Teen" || $myRating == "Adult"){
						$this->rating = $myRating;
					}else{
						$this->rating = "Not Rated";
					}

				}

				function isLarge(){
					if($this->pages >= 500){
						return "true";
					}else{
						return "false";
					}
				}
			}

			$book1 = new Book("Buried", "Ken Wylie", 255, "Adult");

			$book2 = new Book("Lord of the Rings", "Tolkien", 1000000, "Teen");
		
			$book3 = new Book("Harry Potter", "JK Rowling", 500, "Teen");

			/*
			echo $book1->author;
			echo "<br>";
			echo $book2->author;
			echo "<br>";
			echo $book3->author;
			echo "<br";
			*/
			
			/*
			echo $book1->isLarge();
			echo "<br>";
			echo $book2->isLarge();
			*/
			$book1->setRating("ABC");

			echo $book1->getRating();
			echo "<br>";
			echo $book2->getRating();
			echo "<br>";
			
			

			
		?>

	</body>
</html>