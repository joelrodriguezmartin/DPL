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
		$number = "";
		for ($i = 0; $i < 5; $i++){
		    $random = rand(0, 9);
		    $number .= $random;
		}
		echo $number, "\n";
		for ($j = 0; $j < strlen($number); $j++){	    
		    echo "<img alt='$number[$j]' src='".$rutaString.$number[$j].$extension."'>";
		}
		?>
	</body>
</html>