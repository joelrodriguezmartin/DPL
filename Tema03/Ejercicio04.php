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
		
		function primitiva(){
		    $res=[];
		    while(count($res) < 6){
		        $n=rand(1,49);
		        if (!in_array($n,$res)){
		            array_push($res, $n);
		        }
		    }
		    sort($res);
		    return $res;
		}
		$sorteo = primitiva();
		echo "<table border ='1'>
                <tr>";
		foreach($sorteo as $valor){
		    echo "<td>";
		    $number = strval($valor);//Convertimos el numero a string
		    for ($i = 0; $i < strlen($number); $i++){//Recorremos el string 
		        echo "<img style = 'width: 20%;'alt='$number[$i]' src='".$rutaString.$number[$i].$extension."'>";//Linkeamos a la imagen del numero
		    }
		    echo "</td>";
		}
		echo "  </tr>
              </table>";
		echo "La fecha es: ";
		echo date('m/d/y');
		?>
	</body>
</html>
