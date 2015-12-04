<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////

//$persona= new Persona_15;
//SALE ERROR:Fatal error: Cannot instantiate abstract class Persona_15
//No se puede instancias una clase absstracta

$empleado1 = new Empleado_15();
$empleado1->cargarDatosPersonales("Alejandro",27);
$empleado1->cargarSueldo(1000);
echo "Datos personales y sueldo:<br>";
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();





///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase persona
///////////////////////////////////////////////////////////////////////////////////////////////////////
abstract class Persona_15 {
    protected $nombre;
    protected $edad;
    public function cargarDatosPersonales($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function imprimirDatosPersonales(){
        echo 'Nombre:'.$this->nombre.'<br>';
        echo 'Edad:'.$this->edad.'<br>';
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase Empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Empleado_15 extends Persona_15{
    protected $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo=$sueldo;
    }
    public function imprimirSueldo(){
        echo 'Sueldo:'.$this->sueldo.'<br>';
    }
}