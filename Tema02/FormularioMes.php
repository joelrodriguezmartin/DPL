<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Mes</title>
</head>
<body>
<h1>Formulario Mes</h1>
	<?php 
        if ($_GET){
            $arrayMeses = [1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril" , 5 => "Mayo",
                6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre",
                11 => "Noviembre", 12 => "Diciembre"
                ];
            echo ("El mes es: " . $arrayMeses[$_GET["num"]]);
        }else{
    ?>
    <form action="" method="get" enctype="multipart/form-data">
    	<input type="number" name="num"/>
    	<button type="submit">Enviar</button>
    </form>
	<?php }
    ?>
	</body>
</html>
