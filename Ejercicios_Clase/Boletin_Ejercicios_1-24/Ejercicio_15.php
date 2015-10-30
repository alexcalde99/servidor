<!DOCTYPE html>
<!--
15) Un número primo es aquel que solo es divisible entre 1 y entre sí mismo. 
Realizar una página que muestre por pantalla si un número es o no primo.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //echo "hola";
        
        $numero=1;
        $numero_Aleatorio=  mt_rand(1, 50);
        $contador=0;
        while ($numero <= $numero_Aleatorio) {
            if ($numero_Aleatorio % $numero == 0) {
                $contador++;                
            }            
            $numero++;
        }
        
        if ($contador > 2) {
                echo " El numero " . $numero_Aleatorio . " NO es primo<br>";
            }  else {
                echo " El numero " . $numero_Aleatorio . " es primo<br>";
            }
        ?>
    </body>
</html>
