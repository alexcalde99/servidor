<!DOCTYPE html>
<!--
14) Hacer una página que muestre por pantalla todos los divisores (aquellos 
cuyo resto de la división es 0 ) de un
número guardado en una variable.
a) Eje: 16 -> Sus divisores son : 1 ,2 ,4 , 6 , 16
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php            
            $numero_Aleatorio =  mt_rand(1, 10);
            $divisor=1;
            $divisores="";
            
            echo "Numero:$numero_Aleatorio<br>";
            while ($divisor <= $numero_Aleatorio) {
                
                if ($numero_Aleatorio % $divisor == 0) {
                    $divisores=$divisores  . $divisor . "," ;                
                   
                }
                $divisor++;
            }
            echo "Divisores: $divisores";
            
        ?>
    </body>
</html>
