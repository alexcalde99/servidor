<?php

/**
 * Description of Empleado
 *
 * @author ALEX
 */
$nombre = $_POST['nombre'];
$sueldo = $_POST['sueldo'];


$empleado=new Empleado($nombre, $sueldo);
$empleado->mostrarDatos();
$empleado->calcularImpuestos($sueldo);


class Empleado {

private $nombre;
private $sueldo;


//contructor
public function __construct($nom, $suel) {
    $this->nombre=$nom;
    $this->sueldo=$suel;
    
}

//funcion motrar datos
function mostrarDatos() {
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Sueldo: " . $this->sueldo . "<br>";
}

function calcularImpuestos($suel) {
    $this->sueldo=$suel;
    
    if ($suel>3000){
        echo '<br>SI debe pagar impuestos';
    }else{
        echo '<br>NO debe pagar impuestos';
    }
    
}

}

