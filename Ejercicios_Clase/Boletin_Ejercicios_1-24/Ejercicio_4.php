<!DOCTYPE html>
<!--
4) Partiendo de 2 variables $primera y $segunda con valores 4 y 8 , respectivamente, 
hacer una página PHP que calcule: 
a) $primera elevada a $segunda. 
b) Raíz cuadrada de $primera . 
c) Raíz cuadrada de $segunda . 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $primera=4;
        $segunda=8;
        $resultado1=  pow($primera, $segunda); //pow($base x $exponente);
        
        echo "a) $primera elevada a $segunda es: $resultado1";
        echo "<p>b) Raíz cuadrada de $primera es: " . sqrt($primera);
        echo "<p>c) Raíz cuadrada de $segunda es: " . sqrt($segunda);
        
        
        
        ?>
    </body>
</html>
