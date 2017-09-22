Tutoriales CSS/CSS3 - Formulario de contacto 
=================

Código HTML para el tutorial
```html
<form action="">
	<p>Nombre:</p>
	<input type="text" class="field"> <br/>

	<p>Correo electrónico:</p>
	<input type="text" class="field"> <br/>

	<p>Asunto:</p>
	<input type="text" class="field"> <br/>

	<p>Mensaje:</p>
	<textarea class="field"></textarea> <br/>

	<p class="center-content">
		<input type="submit" class="btn btn-green" value="Enviar Datos">
	</p>

</form>
```

Código CSS para el tutorial

```css
form{
			background-color: white;
			border-radius: 3px;
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
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}
```

=================
Vida MRR © 2016 Derechos Reservados