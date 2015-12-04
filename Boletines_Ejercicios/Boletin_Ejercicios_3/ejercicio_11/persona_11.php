<?php

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 04/12/2015
 * Time: 0:18
 */
class Persona_11{
    protected $nombre;
    protected $edad;

    public function cargarDatosPersonales($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatosPersonales(){
        echo 'Nombre:' . $this->nombre . '<br>';
        echo 'Edad:' . $this->edad . '<br>';
    }


}