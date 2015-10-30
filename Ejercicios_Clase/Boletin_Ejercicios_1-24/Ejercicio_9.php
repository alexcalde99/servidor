<!DOCTYPE html>
<!--
9) Hacer una página que tenga 2 variables y según el valor de dichas variables realice los siguientes apartados:
----a) Si el valor de la primera variable es mayor que 0 y el valor de la segunda menor que la primera, 
mostrará el nombre del alumno.
----b) Si el valor de la primera variable es mayor que 0 y el valor de la segunda es mayor o igual que la primera, 
mostrará los apellidos del alumno.
----c) Si el valor de la primera variable es menor que 0 , mostrará el nombre y apellidos completos del alumno, 
independientemente del valor de la segunda variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php            
            $numero1 = mt_rand(-5, 5);
            $numero2 = mt_rand(-5, 5);
            $nombre = "Alejandro";
            $apellidos = "Calderon Giron";
            
            echo "Numero1=$numero1  " . "___" . "Numero2=$numero2<br>";
            if ($numero1 > 0 && $numero2 < $numero1) {
                echo $nombre;
            }elseif ($numero1 > 0 && $numero2 >= $numero1) {
                echo "$apellidos";
            }  else {
                echo "$nombre $apellidos";
            }
        ?>
    </body>
</html>
