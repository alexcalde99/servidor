<!DOCTYPE html>
<!--
8) Hacer una página en PHP que tenga 2 variables y nos indique si la suma de los números es 
mayor que el producto de ellos o al contrario. 
Ejemplo:  
a) $numero1=1; $numero2=2 --- “la suma es mayor que el producto” 
b) $numero1=3; $numero2=2 --- “el producto es mayor que la suma”
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero1 = mt_rand(1, 10);
            $numero2 = mt_rand(1, 10);
            
            echo "$numero1 $numero2<br>";
            if ($numero1 + $numero2 > $numero1 * $numero2) {
                echo "La Suma es Mayor que el producto";
            }  else {
                echo "El producto es mayor que la suma";
            }
            
        ?>
    </body>
</html>
