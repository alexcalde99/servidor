<!DOCTYPE html>
<!--
11) Realizar un programa en PHP que muestre por pantalla la tabla de multiplicar de una variable 
(desde el 1 al 10)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero = mt_rand(1, 10);
            $numeros_tabla=1;
            echo "<b>Tabla de Multiplicar de $numero</b><br>";
            while ($numeros_tabla <=10) {
                $total=$numero * $numeros_tabla;
                echo "$numero x $numeros_tabla =$total<br>";
                $numeros_tabla++;
            }
        ?>
    </body>
</html>
