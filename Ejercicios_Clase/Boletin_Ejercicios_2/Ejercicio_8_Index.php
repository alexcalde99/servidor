<!DOCTYPE html>
<!--
8) Realizar una función que calcule la edad . La función recibirá como parámetro el año 
de nacimiento en formato “dd/mm/yyyy” .
a) Ejemplo:
b) $fechanacimiento=”03/05/1978”;
anyos=CalculaEdad($fechadenacimiento);
Echo “La edad es $anyos”; ***
(***) Hay que utilizar la función substr .
Ejemplo :
substr(“01:42:43”,0,2) = “01”
substr(“01:42:43”,3,2) =”42”
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form" method="POST" action="Ejercicio_8.php">
            <h4>Introduce fecha de nacimiento para saber tu edad:</h4>
            fecha(dd/mm/aaaa)<input type="text" name="fechaNacimiento" value="" />
            <input type="submit" value="Enviar" name="enviar" />
        </form>
    </body>
</html>
