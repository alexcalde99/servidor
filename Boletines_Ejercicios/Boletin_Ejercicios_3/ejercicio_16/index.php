<?php


///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////
$empleado1= new Empleado_16("Alejandro",40,3,50);
$empleado1->calcularSueldo();
echo "Datos del trabajador:<br>";
$empleado1->imprimir();

$gerente1=new Gerente_16("Aida",3000);
echo "<br>Datos del gerente:<br>";
$gerente1->calcularSueldo();
$gerente1->imprimir();






///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase abstracta trabajador
///////////////////////////////////////////////////////////////////////////////////////////////////////
abstract class Trabajador_16 {
    protected $nombre;
    protected $sueldo;
    public function __construct($nombre){
        $this->nombre=$nombre;
    }
    public function imprimir(){
        echo 'Nombre:'.$this->nombre.'<br>';
        echo 'Sueldo:'.$this->sueldo.'<br>';
    }
    public abstract function calcularSueldo();
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Empleado_16 extends Trabajador_16 {
    protected $horasTrabajadas;
    protected $valorHora;
    public function __construct($nombre,$horas,$valor){
        parent::__construct($nombre);
        $this->horasTrabajadas=$horas;
        $this->valorHora=$valor;
    }
    public function calcularSueldo(){
        $this->sueldo=$this->horasTrabajadas*$this->valorHora;
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase Gerente
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Gerente_16 extends Trabajador_16 {
    protected $utilidades;
    public function __construct($nombre,$utilidades){
        parent::__construct($nombre);
        $this->utilidades=$utilidades;
    }
    public function calcularSueldo(){
        $this->sueldo=$this->utilidades*0.10;
    }
}