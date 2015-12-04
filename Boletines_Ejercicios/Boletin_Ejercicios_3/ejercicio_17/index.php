<?php


$persona1=new Persona_17();
$persona1->cargarDatosPersonales('Alejandro',27);
echo 'Datos personales:<br>';
$persona1->imprimirDatosPersonales();


$empleado1=New Empleado_17();
$empleado1->cargarDatosPersonales('aida',25);
$empleado1->cargarSueldo(1000);
echo '<br>Datos personales y sueldo:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase persona
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Persona_17 {
    protected $nombre;
    protected $edad;
    public final function cargarDatosPersonales($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function imprimirDatosPersonales(){
        echo 'Nombre:'.$this->nombre.'<br>';
        echo 'Edad:'.$this->edad.'<br>';
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////
final class Empleado_17 extends Persona_17{
    protected $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo=$sueldo;
    }
    public function imprimirSueldo(){
        echo 'Sueldo:'.$this->sueldo.'<br>';
    }
}


