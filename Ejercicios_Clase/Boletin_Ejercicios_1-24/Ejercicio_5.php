<!DOCTYPE html>
<!--
5) Tenemos 2 cadenas $cadena1,con valor “hola a todo el mundo”, y $cadena2, 
con valor “mi nombre es nombre y apellidos del alumno”. Se pide. a) $cadena3 contendrá 
el valor de la concatenación de $cadena1 y $cadena2, mostrar por pantalla el contenido de 
$cadena3. b) $cadena1 contendrá el resultado de la concatenación de sí misma con $cadena2, 
mostrar por pantalla el contenido de $cadena1.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cadena1="Hola a todo el mundo";
        $cadena2="Mi nombre es Alejandro Calderon Giron";
        $cadena3=$cadena1 . " " . $cadena2;
        echo "$cadena3";
        echo "<p>";
        echo $cadena1=$cadena1 . " " . $cadena2;
        
        ?>
    </body>
</html>
