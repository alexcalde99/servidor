<?php
/*
 * 1) Elaborar una página PHP que contenga una función primo (número primo es aquel que solo es 
 * divisible por 1 y por él mismo ) que recibe un número como parámetro y devuelve los siguientes
 *  resultados:
a) Si el número es primo muestra por pantalla “El número es primo”.
b) Si el número NO es primo muestra por pantalla “El número NO es primo”.
 */


function comporbarPrimo($numero) {
    $contador=0;
    for ($index = 1; $index <= $numero; $index++) {
        if ($numero % $index == 0) {
            $contador++;
        }  
        
    }
   
    if($contador > 2){
        return "El numero $numero No es Primo";
    }else{
        return "El numero $numero SI es primo";
    }
   
    
    
    
}


$numero_Aleatorio=mt_rand(1,50);
$respuesta=  comporbarPrimo($numero_Aleatorio);


echo "$respuesta";