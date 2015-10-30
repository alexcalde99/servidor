<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//metodo final y clase final
//classe: no se pueden crear clases hijas, no se pude heredar
//


class Operaciones {

    protected $valor1;
    protected $valor2;
    protected $resultado;

    public function __construct($v1, $v2) {
        $this->valor1 = $v1;
        $this->valor2 = $v2;
    }

    public function impirmirResultado() {
        return $this->resultado;
    }

}

final class Sumas extends Operaciones {
  private $titulo;
  
  public function __construct($v1,$v2,$tit) {
      //llamar al contructor del padre
      
      parent::__construct($v1,$v2);
      
      $this->titulo=$tit;
      
  }
  
  public function Operar() {
      echo $this->titulo;
      echo $this->valor1 . "+" . $this->valor2 . " es: ";
      $this->resultado = $this->valor1 + $this->valor2;
  }
}


class Suma1 extends Sumas{
    
}
