<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Tabla {

    private $celdas = array();
    private $cantFilas;
    private $cantColumnas;

    public function __construct($fi, $co) {
        $this->cantFilas = $fi;
        $this->cantColumnas = $co;
    }

    public function insertar($cel, $fila, $columna) {
        $this->celdas[$fila][$columna] = $cel;
    }  

    
    private function mostrar($fi, $co) {
        $this->celdas[$fi][$co]->graficar();
    }

    

    public function graficar() {
        echo '<table border="1">';
        for ($f = 1; $f <= $this->cantFilas; $f++) {
            echo '<tr>';
            for ($c = 1; $c <= $this->cantColumnas; $c++) {
                $this->mostrar($f, $c);
            }
            echo '</tr>';
        }
        echo '</table>';
    }

}
