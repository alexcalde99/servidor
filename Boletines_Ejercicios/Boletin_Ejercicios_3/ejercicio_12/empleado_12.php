<?php

include "persona_12.php";
class Empleado_12 extends Persona_12{

    protected $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo=$sueldo;
    }
    public function imprimirSueldo(){
        echo 'Sueldo:'.$this->sueldo.'euros<br>';
    }
}


