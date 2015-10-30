<!DOCTYPE html>
<!--
2) Partiendo de 2 variables $primera y $segunda con valores 4 y 8 , respectivamente, 
hacer una página PHP que calcule: 
a) La suma de $primera y $segunda. 
b) El producto de $primera y $segunda.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $primera=4;
            $segunda=8;
            $total=$primera + $segunda;
            echo "Ejercicio a:<br>";
            echo "La Suma de $primera + $segunda es igual a: $total<br>";
            echo "<br>---------<br>";
            echo "<br>Ejercicio b:<br>";
            echo "El producto de $primera y $segunda es " . $primera*$segunda;
            
            
        ?>
    </body>
</html>
