<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Project 1</title>
    </head>
    <body>

        <?php
		echo "CENG 111";
        ?>

	<?php
		$x = 5; // global scope 
		function myTest($x) {
  			// using x inside this function will generate an error
  			echo "<h1>Variable x inside function is: $x</h1>";
		} 

	myTest(10);
	echo "<p>Variable x outside function is: $x</p>";
	?>

    </body>
</html>