
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
		<title>parcial</title>
	</head>

	<body>
		<?php require 'header.view.php' ?>
		<h1>Encuesta</h1>
		<section class="casilla">
		<?php
		if(file_exists('datos/datos.json')){
			$DatosActuales = file_get_contents('datos/datos.json');
			$arrayTurnos = json_decode($DatosActuales, true);

        }
                   
					
            
			
			}
					
					
					
					
					
			
			?>
			</section>
	</body>
</html>
