<?php
    
    function sumaMatrices($a, $b) {
        if (count($a) != count($b) || count($a[0]) != count($b[0])){
            return false;
        }
        $r = [];
        for ($i = 0; $i < count($a); $i++) {
            for ($j = 0; $j < count($a[0]); $j++) {
                $r[$i][$j] = $a[$i][$j] + $b[$i][$j];
            }
        }
        return $r;
    }

    function imprimirMatriz($a){
        echo "<table border='1'>\n";
        for ($i = 0; $i < count($a); $i++) {
            echo "<tr>\n";
            for ($j = 0; $j < count($a[0]); $j++) {
               echo "<td style='padding: 3px; text-align: right;'>",$a[$i][$j],"</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>";
    }
    
    function imprimeTablaMatriz($nombre, $filas, $cols){
        echo "<table border='1'>\n";
        for ($i = 0; $i < $filas; $i++) {
            echo "\n<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $valor=$i*$cols+$j;
                echo "<td><input type='number' name='$nombre"."[$i][]' value='$valor' maxlength='4' size='4'/> </td>";      
            }
            echo "</tr>\n";
        }
        echo "</table>";
    }

?>