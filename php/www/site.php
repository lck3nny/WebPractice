 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <title>My PHP Doc</title>

  </head>
  <body>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Example of basic variable usage -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <?php
      echo("<h1>Liam's Site</h1>");
      echo "<p>this is my site, welcome!</p>";
      echo "<hr>";

      $my_name = "John";
      $my_age = 35;
      echo "<h3>Basic Variables</h3>";
      echo "There once was a man named $my_name <br>";
      echo "He was $my_age years old <br>";
      echo "He really liked the name $my_name <br>";
      echo "But didn't like being $my_age <br>";

      echo "<hr>";
    ?>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Form used to get the name and age of a user
          - input name
          - input Age
          - output result -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <h3>Get User Info</h3>
    <form action="site.php" method="get">
      Name: <input type="text" name="name">
      <br>
      Age: <input type"text" name="age">
      <br>
      <input type="submit">
    </form>

    Your name is: <?php
      echo $_GET["name"];
     ?>
     <br>
     Your age is: <?php
     echo $_GET["age"];
     echo "<hr>";
     ?>

     <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     <!-- Calculator form
          - input number 1
          - input number 2
          - output result -->
     <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     <h3>Calculator</h3>

     <form action='site.php' method='get'>
       Number 1 <input type="number" name="num1">
       <br>
       Number 2 <input type="number" name="num2">
       <input type="submit">
     </form>

     Answer:  <?php
        echo $_GET["num1"] + $_GET["num2"];
        echo "<hr>";
      ?>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- Madlib variables
           - allow user to edit words in the script
           - output result -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <h3>Madlib</h3>
      <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
      </form>
      <br>

      <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];


        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
        echo "<hr>";
      ?>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- Post vs Get -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <h3>GET vs POST</h3>

      <form action="site.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
      </form>
      <br>
      <?php
        echo $_POST["password"];
        echo "<hr>";
      ?>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- Arrays 
            - not limited to a single data type -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <h3>Arrays</h3>

      <?php
        $friends = array("alice", "bob", "charlie", "dave", "elle");
        $friends[1] = "bill";
        $friends[4] = "frank";
        echo count($friends);
        echo "<hr>"; 
      ?>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- Checkboxes 
             -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <h3>Checkboxes</h3>
      <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples">
        <br>
        Bananas: <input type="checkbox" name="fruits[]" value="bananas">
        <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges">
        <br>
        <input type="submit">
      </form>

      <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        echo "<hr>";
      ?>



  </body>
 </html>
