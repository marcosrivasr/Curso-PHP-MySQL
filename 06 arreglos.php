<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos</title>
	<style>
		body{background-color: #B5CDE6; font-family: Arial; font-size: 4em; padding: 50px;}
	</style>
</head>
<body>

	<?php
		$frutas = array("platano", "manzana", "uvas", "fresa");

		print_r($frutas);
		echo $frutas[3];

		echo "<br >";

		echo count($frutas) . " elementos";

		echo "<br >";

		for($i= 0; $i < count($frutas); $i++){
			echo $frutas[$i] . "<br />";
		}
			

		$edades = array("Marcos" => 34, "Tania" => 23, "Omar" => 27);

		print_r($edades);

		echo "<br >";

		echo $edades['Tania'];

		echo "<br >";


		foreach($edades as $key => $value){
			echo $key . " tiene el valor de " . $value . "<br />";
		}

	?>
</body>
</html>