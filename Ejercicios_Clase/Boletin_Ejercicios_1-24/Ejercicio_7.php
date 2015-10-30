<!DOCTYPE html>
<!--
7) Realizar una página que compruebe si el contenido de una variable es PAR o IMPAR 
(recordad que un número par su resto de la división entre 2 es 0). Utilizar el operador 
% para obtener el resto de una división.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $numero = mt_rand(1, 100);
         if ($numero % 2 == 0) {    
             echo "$numero es PAR";
            }else {
            echo "$numero es IMPAR";
        }
        ?>
    </body>
</html>
