<!DOCTYPE html>
<!--
18) Realizar un programa en PHP que muestre por pantalla la tabla de multiplicar 
de una variable (desde el 1 al 10) .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero=  mt_rand(1, 10);
        echo "<b>Tabla de multiplicar de $numero</b><br>";
        for ($index = 0; $index <=10; $index++) {
            $resultado=$numero * $index;
            echo "$numero x $index =$resultado";
            echo "<br>";
}
        ?>
    </body>
</html>
