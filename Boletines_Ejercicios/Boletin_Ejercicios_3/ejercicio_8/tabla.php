<?php

class Tabla {

    private $celdas = array();
    private $cantFilas;
    private $cantColumnas;

    public function __construct($fi, $co) {
        $this->cantFilas = $fi;
        $this->cantColumnas = $co;
    }

    public function cargar($fila, $columna, $texto, $cfue, $cfon) {
        $this->celdas[$fila][$columna] = new Celda($texto, $cfue, $cfon);
    }

    private function mostrar($fi, $co) {
        $this->celdas[$fi][$co]->graficar();
    }

    public function graficar() {
        echo '<table border="2">';
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
