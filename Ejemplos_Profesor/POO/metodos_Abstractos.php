<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



abstract class Operacion{
    
    protected $valor1;
    protected $valor2;
    protected $resultado;
    
    
    public function __construct($v1,$v2) {
        
        $this->valor1=$v1;
        $this->valor2=$v2;
        
    }
    
    public function imprimirResultado() {
        
        return $this->resultado;
        
    }
    
    public abstract function operar();
    
    
}


class Suma extends Operacion{
    public function operar() {
        $this->resultado=  $this->valor1 + $this->valor2;
        
    }
}

class Resta extends Operacion{
    public function operar() {
        $this->resultado=  $this->valor1 - $this->valor2;
        
    }
}

$suma= new Suma(10, 10);
$suma->operar();
echo "El restltado de la suma es: " . $suma->imprimirResultado() . "<br>";

$resta= new Resta(20, 10);
$resta->operar();
echo "El restltado de la resta es: " . $resta->imprimirResultado();