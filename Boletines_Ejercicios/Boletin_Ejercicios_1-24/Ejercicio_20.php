<!DOCTYPE html>
<!--
20) Hacer una página en PHP que muestre una figura similar a la siguiente. 
NOTA solo está permitido el uso de un * en todo el código.
*
**
***
****
*****
******
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $simbolo="*";
            $cadena=" ";
            for ($index = 0; strlen($cadena) < 7; $index++) {
                $cadena=$cadena . $simbolo;
                echo "$cadena<br>";
            }
        ?>
    </body>
</html>
