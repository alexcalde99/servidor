<?php

include "persona_11.php";
class Empleado_11 extends Persona_11{

    protected $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo=$sueldo;
    }
    public function imprimirSueldo(){
        echo 'Sueldo:'.$this->sueldo.'euros<br>';
    }
}


