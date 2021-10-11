<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<title>Title</title>
	</head>
	<body>	
		<?php 
		$rutaString = "../imgs/numeros/";
		$extension = ".png";
		
		$año = date("Y");//Guardamos los valores de la fecha en variables
		$mes = date("m");
		$dia = date("d");
		
		$hora = date("h");//Guardamos los valores de la hora en variables
		$min = date ("i");
		
		$arrayFecha = [strval($mes), strval($dia), strval($año)];
		$arrayHora = [strval($hora), strval($min)];
		echo "FECHA:";
		for ($i = 0; $i < count($arrayFecha); $i++){
		    for ($j = 0; $j < strlen($arrayFecha[$i]); $j++){
		        echo "<img style = 'width: 10%;'alt='".$arrayFecha[$i][$j]."' src='".$rutaString.$arrayFecha[$i][$j].$extension."'>";  
		    }
		    if ($i < count($arrayFecha) - 1){
		        echo "/";
		    }
		}
		echo "HORA:";
		for ($i = 0; $i < count($arrayHora); $i++){
		    for ($j = 0; $j < strlen($arrayHora[$i]); $j++){
		        echo "<img style = 'width: 10%;'alt='".$arrayHora[$i][$j]."' src='".$rutaString.$arrayHora[$i][$j].$extension."'>";
		    }
		    if ($i < count($arrayHora) - 1){
		        echo ":";
		    }
		}
		?>
	</body>
</html>