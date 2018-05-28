<html>
 <head>
  <title>PHP-Test</title>
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
   echo '<p>Net worth</p>';
   $starting_capital = 500000
   $annual_growth = 1.07
   for ( $i = 0; $i < 10; $i++){
    echo '<p>Year '.($i+1).': '.$starting_capital.'</p>';
	$starting_capital = $starting_capital * $annual_growth
   }
  ?>
 </body>
</html>
