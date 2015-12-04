<?php




class Persona_12{
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