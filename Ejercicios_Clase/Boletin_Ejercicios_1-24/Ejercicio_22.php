<!DOCTYPE html>
<!--
22) Un número primo es aquel que solo es divisible entre 1 y entre sí mismo. Realizar una página que 
muestre por pantalla si un número es o no primo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero_Aleatorio = mt_rand(1, 50);
        $contador = 0;

        for ($index = 1; $index <= $numero_Aleatorio; $index++) {
            if ($numero_Aleatorio % $index == 0) {
                $contador++;
            }
        }

        echo "NUMERO: $numero_Aleatorio<br>";
        if ($contador > 2) {
            echo "El numero $numero_Aleatorio no es primo";
        } else {
            echo "El numero $numero_Aleatorio es primo";
        }
        ?>
    </body>
</html>
