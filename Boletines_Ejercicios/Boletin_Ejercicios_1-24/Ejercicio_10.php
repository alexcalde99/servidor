<!DOCTYPE html>
<!--
10) Realizar un programa en PHP que muestre por pantalla los números del 1 al 100 separados por coma “,” .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $i = 1;
            while($i <= 100){
           echo "$i" . ",";
           $i++;
            }
        ?>
    </body>
</html>
