<!DOCTYPE html>
<!--
21) Hacer una página que muestre por pantalla todos los divisores (aquellos 
cuyo resto de la división es 0 ) de un número guardado en una variable.
a) Eje: 16 -> Sus divisores son : 1 ,2 ,4 , 6 , 16
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $numero=  mt_rand(1, 50);
           echo "Numero $numero<br>Divisores:";
           for ($index = 1; $index <=$numero; $index++) {
               if ($numero % $index==0) {
                   echo "$index,";
               }
}
        ?>
    </body>
</html>
