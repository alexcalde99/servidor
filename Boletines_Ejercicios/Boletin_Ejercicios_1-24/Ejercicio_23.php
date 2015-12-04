<!DOCTYPE html>
<!--
23) Hacer una página en PHP que muestre los 20 primeros términos de la sucesión de Fibonacci.La 
sucesión de Fibonacci se caracteriza por tener el primer elemento:1, el segundo elemento: 1 y 
el resto de elementos : se forman sumando los 2 términos anteriores -> 1 ,1 , 2, 3, 5 ,…..
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $arrayFibonacci = [1, 1]; //La posicion 0 y 1 del array es 1
        $maximo = 20;
           
        echo "<b>20 primeros términos de la sucesión de Fibonacci.</b><br>";

        for ($index = 2; $index < $maximo; $index++) {
            $arrayFibonacci[$index] = $arrayFibonacci[$index - 2] + $arrayFibonacci[$index - 1];
        }
        for ($index1 = 0; $index1 < count($arrayFibonacci); $index1++) {
            echo "$arrayFibonacci[$index1],";
        }
        ?>
    </body>
</html>
