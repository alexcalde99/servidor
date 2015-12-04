<?php

class Celda {

    private $texto;
    private $colorFuente;
    private $colorFondo;

    function __construct($tex, $cfue, $cfon) {
        $this->texto = $tex;
        $this->colorFuente = $cfue;
        $this->colorFondo = $cfon;
    }

    public function graficar() {
        echo '<td style="color:' . $this->colorFuente . ';background-color:' . $this->colorFondo . '">' . $this->texto . '</td>';
    }

}
