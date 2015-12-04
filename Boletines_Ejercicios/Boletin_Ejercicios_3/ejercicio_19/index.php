<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////
$persona1=new Persona_19();
$persona1->fijarNombreEdad('Alejandro',27);
echo 'Datos de persona1:<br>';
echo "Nombre:" . $persona1->retornarNombre().'<br> Edad: '.$persona1->retornarEdad().'<br>';
$persona2=clone($persona1);
echo '<br>Datos de persona2:<br>';
echo "Nombre:" . $persona2->retornarNombre().'<br> Edad: '.$persona2->retornarEdad().'<br>';




///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase persona
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Persona_19 {
    private $nombre;
    private $edad;
    public function fijarNombreEdad($nom,$ed){
        $this->nombre=$nom;
        $this->edad=$ed;
    }
    public function retornarNombre(){
        return $this->nombre;
    }
    public function retornarEdad(){
        return $this->edad;
    }
    public function __clone(){
        $this->edad++;
    }
}

