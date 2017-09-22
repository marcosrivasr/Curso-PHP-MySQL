<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="boton.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<style>
		body{font-family: Arial; background-color: #256999; box-sizing: border-box; padding: 100px;}

		form{
			background-color: white;
			border-radius: 0 0 3px 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px #ccc;
			border-radius: 0 4px 4px 0; 
			padding: 10px;
			width: 240px;
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}

		.field-container div{
			display: inline-block;
			vertical-align: top;
		}

		.field-container i{
			background-color: #eee;
			border-radius: 4px 0 0 4px; 
			color: #888;
			padding: 10px 10px 11px 10px;
			border: solid 1px #ccc;
			max-height: 35px;
			margin-right: -5px;
			vertical-align: top;
		}

		#menu ul{
			list-style: none;
			margin: 0;
			padding: 0;
		}

		#menu ul li{
			display: inline-block;
			width: 50%;
			margin-right: -4px;
		}

		#menu ul li a{
			background-color: #ccc;
			color: #222;
			display: block;
			padding: 20px 20px;
			text-decoration: none;
		}
		#menu ul li a:hover{
			background-color: #eee;
		}

		#formularios, #menu{
			margin: 0 auto;
			width: 340px;
		}

		.active{
			background-color: white !important;
		}

		.columns >div{
			width: 50%;
			display: inline-block;
			vertical-align: top;
			margin-right: -4px;
		}
		.columns .field{
			width: 80px;
		}

		#form_register{
			display: none;
		}

	</style>
</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="#" class="active">Iniciar Sesión</a></li>
		</ul>
	</div>
	<div id="formularios">
		<form action="recibir_post.php" id="form_session" method="post">

			<p>Correo electrónico:</p>
			<div class="field-container">
				<i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>	
				<input name="usuario" type="text" class="field" placeholder="user@example.com"> <br/>
			</div>

			<p>Contraseña:</p>
			<div class="field-container">
				<i class="fa fa-key fa-lg" aria-hidden="true"></i>	
				<input name="password" type="password" class="field" placeholder="*******"> <br/>
			</div>
			<p class="center-content">
				<input type="submit" class="btn btn-green" value="Iniciar sesión"> <br/><br/>
				<a href="recibir_get.php?tipo_usuario=nuevo&navegador=chrome">Registra cuenta</a>
			</p>
		</form>	

	

	</div>

</body>
</html>


