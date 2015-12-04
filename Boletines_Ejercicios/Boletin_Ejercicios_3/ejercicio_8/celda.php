<?php

class Celda {

    private $texto;
    private $colorFuente;
    private $colorFondo;

    //********construtor*******
    function __construct($texto, $colorFue, $colorFon) {
        $this->texto = $texto;
        $this->colorFuente = $colorFue;
        $this->colorFondo = $colorFon;
    }

    public function graficar() {
        echo '<td style="color:' . $this->colorFuente . ';background-color:' . $this->colorFondo . '">' . $this->texto . '</td>';
    }

}
