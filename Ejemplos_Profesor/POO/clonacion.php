<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Persona {
    private $nombre;
    private $edad;
    
    public function  fijarNombreEdad($nom, $ed){
        $this->nombre = $nom;
        $this->edad = $ed;
    }
    public function getNombre(){
        
        $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
}

$persona1 = new Persona();
$persona1->fijarNombreEdad("Juan", 20);
echo "Nombre: " . $persona1->getNombre() . "<br />";
echo "Edad: " . $persona1->getEdad() . "<br />";

$x = $persona1;
echo 'Datos de la $persona1 : ';
echo $persona1->getNombre() . "-" . $persona1->getEdad() . '<br>';
echo 'Datos de la persona $x';
echo $x->getNombre() . "-" . $persona1->getEdad() . '<br>';



//modificamos los datos

$x->fijarNombreEdad("Manola", 23);
echo 'Despues de modificar los datos <br>';

echo 'Datos de la $persona1 : ';
echo $persona1->getNombre() . "-" . $persona1->getEdad() . '<br>';
echo 'Datos de la persona $x';
echo $x->getNombre() . "-" . $persona1->getEdad() . '<br>';


//clonamos

$persona2= clone ($persona1);
$persona1->fijarNombreEdad("luis", 12);

echo '<br>';

echo 'Despuesd e modifica losd atos de la persona <br>';
echo 'Datos de la $persona1 : ';
echo $persona1->getNombre() . "-" . $persona1->getEdad() . '<br>';

