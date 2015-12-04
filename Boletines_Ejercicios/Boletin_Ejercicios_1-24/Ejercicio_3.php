<!DOCTYPE html>
<!--
3) Partiendo de 2 variables $primera y $segunda con valores 10 y 2 , respectivamente, 
hacer una página PHP que calcule: 
a) La diferencia de $primera menos $segunda. 
b) La división de $primera entre $segunda
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $primera=10;
            $segunda=2;
            $resultado1=$primera-$segunda;
            $resultado2=$primera/$segunda;
            
            echo "a) La diferencia de $primera menos $segunda es: $resultado1";
            echo "<br>------------------------<br>";
            echo "b) La división de $primera entre $segunda es: $resultado2";

        ?>
    </body>
</html>
