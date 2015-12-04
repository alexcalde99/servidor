<?php

class Empleado2 {
  private $nombre;
  private $sueldo;
  public function __construct($nom,$sue=1000)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function imprimir()
  {
    echo 'Nombre:'.$this->nombre.' - Sueldo:'.$this->sueldo.'<br>';
  } 
}
