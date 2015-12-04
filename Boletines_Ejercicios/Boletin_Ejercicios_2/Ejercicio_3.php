<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cadena=$_POST['text'];

//$texto="hola comoo eta";


$numeroVocales=  cuentaVocales($cadena);
echo "El numero de vocales del texto es: $numeroVocales";


function cuentaVocales($cadena) {   
   
    
    
    $vocales = ['a','e', 'i', 'o','u'];
    $contador=0;
    
    for ($index = 0; $index < strlen($cadena); $index++) {
        if (in_array($cadena[$index], $vocales)) {
            //Busca la aguja (needle) en el pajar (haystack) usando una comparación flexible a menos que esté establecido strict.
            $contador++;
        }
        
    }
   return $contador;
}

