<?php

/*
 * 2) Elaborar una página PHP que contenga una función media que recibe 4 números como parámetros y 
 * devuelve el valor medio de los 4 parámetros recibidos.
 */

function sacarMedia($n1, $n2, $n3,$n4) {
    $total=$n1 + $n2 + $n3 + $n4;
    $media=$total/4;
    
    return $media;
}


$numero_Aleatorio1 = mt_rand(1,50);
$numero_Aleatorio2 = mt_rand(1,50);
$numero_Aleatorio3 = mt_rand(1,50);
$numero_Aleatorio4 = mt_rand(1,50);

$resultado=  sacarMedia($numero_Aleatorio1, $numero_Aleatorio2, $numero_Aleatorio3, $numero_Aleatorio4);

echo "El valor medio de " . $numero_Aleatorio1 . "," . $numero_Aleatorio2. "," . $numero_Aleatorio3. "," .
        $numero_Aleatorio4 .  " es: ";
echo "$resultado";