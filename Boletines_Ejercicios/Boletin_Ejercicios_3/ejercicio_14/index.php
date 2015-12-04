<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////
$persona1=new Persona('Alejandro',27);
echo 'Datos personales:<br>';
$persona1->imprimirDatosPersonales();

$empleado1=New Empleado('Aida',25,1000);
echo '<br>Datos personales y sueldo:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase persona
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Persona {
    protected $nombre;
    protected $edad;
    public function __construct($nombre,$edad){
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
class Empleado extends Persona{
    protected $sueldo;
    public function __construct($nombre,$edad,$sueldo){
        //nombre y sueldo crean la persona, el parametro sueldo se asigna al empleado
        parent::__construct($nombre,$edad);
        $this->sueldo=$sueldo;
    }
    public function imprimirSueldo(){
        echo 'Sueldo:'.$this->sueldo.'<br>';
    }
}