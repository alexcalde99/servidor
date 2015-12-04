<!DOCTYPE html>
<!--
13) Hacer una página en PHP que muestre una figura similar a la siguiente. NOTA solo está permitido el uso de un *
en todo el código.
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
            $cadena="";
            $i=0;
            while ($i < 6) {               
               $cadena=$cadena . $simbolo;
               echo "$cadena<br>";
               $i++;
            }
            
            
        ?>
    </body>
</html>
