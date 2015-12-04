<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////

$trabajadores = [
    new Empleado_20("Alejandro",1000),
    new Empleado_20("Aida", 2000),
    new Empleado_20("David",3000),
    new Gerente_20("Pepe", 4000),
    new Gerente_20("Luis",5000),
];
$maxGerenteIndex = 0;
$maxGerenteSueldo = 0;

for($i=0; $i<count($trabajadores); $i++){

    //si el trabajador es instancia de gerente y el sueldo del trabajador es mayor que 0
    //se va asignar el primer grente que encuentre como el maximo
    //el las siguentes pasadas de bucle ira comparando el sueldo de los empleados,si no son mayores,sera el primero el maximo
    if($trabajadores[$i] instanceof Gerente_20 && $trabajadores[$i]->getSueldo() > $maxGerenteSueldo){
        $maxGerenteIndex = $i;
        $maxGerenteSueldo = $trabajadores[$i]->getSueldo();
    }
}
$maxGerente = $trabajadores[$maxGerenteIndex];
echo "El nombre del gerente con mayor sueldo es:" . $maxGerente->getNombre() . "<br />";
echo 'Y tiene un sueldo de :'. $maxGerente->getSueldo() . "<br />";


///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase abstracta trabajador
///////////////////////////////////////////////////////////////////////////////////////////////////////
abstract class Trabajador{
    private $nombre;
    private $sueldo;
    function __construct($nombre, $sueldo=1000){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function getNombre(){
        return "$this->nombre";
    }
    public function getSueldo(){
        return  $this->sueldo;
    }
}



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Empleado_20 extends Trabajador{
}



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase gerente
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Gerente_20 extends Trabajador{
}

