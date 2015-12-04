<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////

$persona1=new Persona_13();
$persona1->cargarDatosPersonales("Alejandro",27);
echo 'Datos personales:<br>';
$persona1->imprimir();
echo'<br>';
$empleado1=New Empleado_13();
$empleado1->cargarDatosPersonales("Aida",25);
$empleado1->cargarSueldo(1000);
echo 'Datos personales y sueldo:<br>';
$empleado1->imprimir();



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase persona
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Persona_13 {
    protected $nombre;
    protected $edad;
    public function cargarDatosPersonales($nom,$ed)
    {
        $this->nombre=$nom;
        $this->edad=$ed;
    }
    public function imprimir()
    {
        echo 'Nombre:'.$this->nombre.'<br>';
        echo 'Edad:'.$this->edad.'<br>';
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase Empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////

class Empleado_13 extends Persona_13{
    protected $sueldo;
    public function cargarSueldo($su)
    {
        $this->sueldo=$su;
    }
    public function imprimir()
    {
        parent::imprimir();
        echo 'Sueldo:'.$this->sueldo.'<br>';
    }
}




