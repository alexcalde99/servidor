<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cabeceraPagina
 *
 * @author ALEX
 */
$titulo = $_POST['titulo'];
$posicion = $_POST['posicion'];
$colorFondo = $_POST['colorFondo'];
$colorFuente = $_POST['colorFuente'];

$cabecera = new cabeceraPagina($titulo, $posicion, $colorFondo, $colorFuente);
$cabecera->mostrarDatos($titulo,$posicion, $colorFondo, $colorFuente);

class cabeceraPagina {

    private $titulo;
    private $posicion;
    private $colorFondo;
    private $colorFuente;

    public function __construct($tit, $pos, $colFon, $colFue) {

        $this->titulo = $tit;
        $this->posicion = $pos;
        $this->colorFondo = $colFon;
        $this->colorFuente = $colFue;
    }

    function mostrarDatos($tit, $pos, $colFon, $colFue) {
        //echo $tit;


        echo "
            <style>
            body {background-color:$colFon}
            h1   {color:$colFue;text-align:$pos}
            </style>
            
            <body>
            <h1>$tit</h1>
        

            </body>
                ";


    }

}
