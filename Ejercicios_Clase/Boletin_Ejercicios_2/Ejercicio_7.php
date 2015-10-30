<?php

$numeros=$_POST['numeros'];

calcularNumeroMayor($numeros);

function calcularNumeroMayor($numeros) {
    
    $arrayNumeros = explode(",",$numeros);
    
    echo "<b>Numeros: </b>"; 
    for ($index = 0; $index < count($arrayNumeros); $index++) {
        echo $arrayNumeros[$index] . ",";
    }
    
    echo "<br><b>Numero más alto:</b>" . max($arrayNumeros);
    
}

