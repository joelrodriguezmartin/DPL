<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<title>Title</title>
	</head>
	<body>	
		<?php
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
		    echo "<td>$valor</td>";
		}
		echo "  </tr>
              </table>";
		echo "La fecha es: ";
        echo date('m/d/y');
        ?>
	</body>
</html>
