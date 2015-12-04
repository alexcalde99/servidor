<?php

/* 
 *Confeccionar una clase Empleado, definir como atributos su nombre y sueldo. El constructor 
 * recibe como parámetros el nombre y el sueldo, en caso de no pasar el valor del sueldo inicializarlo 
 * con el valor 1000. Confeccionar otro método que imprima el nombre y el sueldo. Crear luego 
 * dos objetos del la clase Empleado, a uno de ellos no enviarle el sueldo.
 */

include './empleado2.php';

$empleado1=new Empleado2('Alejandro',3000);
$empleado1->imprimir();
$empleado2=new Empleado2('Aida');
$empleado2->imprimir();