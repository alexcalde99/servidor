<?php
include "empleado_11.php";

$persona1= new Persona_11();
echo"Datos Personales:<br>";
$persona1->cargarDatosPersonales("Alejandro",27);
$persona1->imprimirDatosPersonales();

echo"<br>Datos Personales y sueldo:<br>";
$empleado1 = new Empleado_11();
$empleado1->cargarDatosPersonales("Aida",25);
$empleado1->cargarSueldo(1000);
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();