<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario - Listasrroja</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="#" method="POST">
		<?php
			$nombre = "";
			$password = "";
			$email = "";
			$pais = "";
			$nivel = "";
			// TODO (1) declarar variable como arreglo
			$lenguajes = array();
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];
				
				if(isset($_POST['nivel'])){
					$nivel = $_POST['nivel'];
				}else{
					$nivel = "";
				}

				// TODO (2) Validar que existe variable nivel
				if(isset($_POST['lenguajes'])){
					$lenguajes = $_POST['lenguajes'];
				}else{
					$lenguajes = [];
				}
				

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if($pais == ""){
					array_push($campos, "Selecciona un país de origen.");
				}

				if($nivel == ""){
					array_push($campos, "Selecciona un nivel de desarrollo.");
				}
				// TODO (3) Validar que el campo no esté vacío
				if($lenguajes == "" || count($lenguajes) < 2){
					array_push($campos, "Selecciona al menos dos lenguajes de programación.");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

		<p>
			País de origen: <br>	
			<select name="pais" id="">
				<option value="">Selecciona un país</option>
				<option value="mx" <?php if($pais == "mx") echo "selected" ?> >México</option>
				<option value="eu" <?php if($pais == "eu") echo "selected" ?>>Estados Unidos</option>
				<option value="es" <?php if($pais == "es") echo "selected" ?>>España</option>
				<option value="ar" <?php if($pais == "ar") echo "selected" ?>>argentina</option>
				<option value="ch" <?php if($pais == "ch") echo "selected" ?>>China</option>
			</select>
		</p>

		<p>
			Nivel de desarrollo <br>	
			<input type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") echo "checked"; ?>> Principiante
			<input type="radio" name="nivel" value="intermedio" <?php if($nivel == "intermedio") echo "checked"; ?>> Intermedio
			<input type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") echo "checked"; ?>> Avanzado
		</p>

		<p>
			Lenguajes de programación <br>	
			<input type="checkbox" name="lenguajes[]" value="php" <?php if(in_array("php", $lenguajes)) echo "checked"; ?>> PHP <br>
			<input type="checkbox" name="lenguajes[]" value="js" <?php if(in_array("js", $lenguajes)) echo "checked"; ?>> Javascript <br>
			<input type="checkbox" name="lenguajes[]" value="java" <?php if(in_array("java", $lenguajes)) echo "checked"; ?>> Java <br>
			<input type="checkbox" name="lenguajes[]" value="swift" <?php if(in_array("swift", $lenguajes)) echo "checked"; ?>> Swift <br>
			<input type="checkbox" name="lenguajes[]" value="py" <?php if(in_array("py", $lenguajes)) echo "checked"; ?>> Python <br>
		</p>



		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>



