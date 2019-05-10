<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
        <script src="js/filtrar.js"></script>
		<title>Parcial</title>
	</head>


	<body>

		<?php require 'header.view.php' ?>
		<h1>Formulario</h1>
		<form action="validar" method="POST" name="formulario"><br>

		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" required><br>

        <label for="apellido">Apellido: </label>
		<input type="text" name="apellido" id="apellido" required><br>

		
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" required><br>

            <label for="email">Lenguajes: </label>

<div><input type="radio" id="o1" name="options1">Java</div><br>
        <div><input type="radio" id="o2" name="options2">Pascal</div><br>
            <div><input type="radio" id="o3" name="options3">Delphi</div><br>        
            
            <input type="radio" id="o4" name="options4" onclick="habilitarInput()" >Otro <br>
<input type="text" name="otro" id="otro" disabled="true" required><br>


		
<button type="sumbit" id="cargaDatos">Enviar</button>

</form>
	
	</body>
</html>

