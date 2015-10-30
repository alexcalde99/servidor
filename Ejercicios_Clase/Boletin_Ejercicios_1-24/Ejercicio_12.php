<!DOCTYPE html>
<!--
12) Realizar un programa en PHP que muestre por pantalla los números del 100 al 0 en orden descendente, 
dando el salto de 2 en 2 números. Es decir, 100,98,96,94 ,….,2,0.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero=100;
            while ($numero >= 0) {
                $total=$numero;
                echo "$total" . ",";
                $numero-=2;
            }
        ?>
    </body>
</html>
