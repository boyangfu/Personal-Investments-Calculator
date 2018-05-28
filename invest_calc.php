<html>
 <head>
  <title>Investment Calculator</title>
 </head>
 <body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		} 
	?>
	<br><br>
	<form action="display_net_worth.php" method="post">
	Starting Capital: <input type="text" name="starting_capital"><br>
	Annual Growth (%): <input type="text" name="annual_growth"><br>
	<input type="submit" value="Calculate!">
	
 </body>
</html>
