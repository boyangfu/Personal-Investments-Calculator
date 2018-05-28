<html>
<body>
<?php
   echo '<p>Net worth:</p>';
   $starting_capital = $_POST["starting_capital"];
   $annual_growth = ($_POST["annual_growth"]/100)+1;
   for ( $i = 0; $i < 10; $i++){
    echo '<p>Year '.($i+1).': '.round($starting_capital,2).'</p>';
	$starting_capital = $starting_capital * $annual_growth;
   }
?>

</body>
</html> 