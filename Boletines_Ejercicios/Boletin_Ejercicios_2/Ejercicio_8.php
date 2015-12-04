<?php

$fecha=$_POST['fechaNacimiento'];

calcularEdad($fecha);

function calcularEdad($fecha) {
    
    $diaNacimiento = substr($fecha, 0,2);
    $mesNacimiento = substr($fecha, 3,2);
    $añoNacimiento = substr($fecha, 6,9);
    
    echo "Fecha de nacimiento: $fecha<br>";
    
    
    $fechaActual = date("d/m/o");
    
    
    $diaActual=substr($fechaActual, 0,2);
    $mesActual = substr($fechaActual, 3,2);
    $añoActual = substr($fechaActual, 6,9);
    
    
    $añosPersona= $añoActual - $añoNacimiento;
    
    if ($mesNacimiento > $mesActual) {
        echo "Tienes " . ($añosPersona - 1) . " años";
    }else{
        echo "tienes $añosPersona años";
    }
    
    
    
    
    
    
    
    
}

