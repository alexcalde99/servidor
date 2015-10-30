<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class cabeceraPagina{
    
    private $titulo;
    private $ubicacion;
    private $colorfuente;
    private $colorFondo;
    
    
    public function __construct($tit,$ubi='center',$colorFu='#FFFFFF',$colorFon='#000000') {
        
        
        $this->titulo=$tit;
        $this->ubicacion=$ubi;
        $this->colorfuente=$colorFu;
        $this->colorFondo=$colorFon;
        
        
        

        function dibujar() {
            
            echo '<div style="font-size=40px",text-align:" .$this->ubicacion.'; color
        }
        
    }
    
    
}