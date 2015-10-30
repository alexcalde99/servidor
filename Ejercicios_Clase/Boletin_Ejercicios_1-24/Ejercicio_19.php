<!DOCTYPE html>
<!--
19) Realizar un programa en PHP que muestre por pantalla los números del 100 al 0
en orden descendente, dando el salto de 2 en 2 números. 
Es decir, 100,98,96,94 ,….,2,0.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero=2;
            for ($index = 102; $index > 0; $index) {               
                $index-=2;
                echo "$index,";               
            }
        ?>
    </body>
</html>
