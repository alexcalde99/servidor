<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Banner {

    private $ancho;
    private $alto;
    private $mensaje;
    private $imagen;
    private $colorTexto;
    private $colorFondo;

    public function __construct($an, $al, $mens) {
        $this->ancho = $an;
        $this->alto = $al;
        $this->mensaje = $mens;
        $this->imagen = imagecreate($this->ancho, $this->alto);
        $this->colorTexto = imagecolorallocate($this->imagen, 255, 255, 0);
        $this->colorFondo = imagecolorallocate($this->imagen, 255, 0, 0);
        imagefill($this->imagen, 0, 0, $this->colorFondo); //coordenadas desde que punto pinta
    }

    public function Dibujar() {
        imagestring($this->imagen, 5, 50, 10, $this->mensaje, $this->colorTexto);
        header("Content-type: image/png");
        imagepng($this->imagen);
    }

    public function __destruct() {
        imagedestroy($this->imagen);
    }

}

$banner1 = new Banner(428, 45, 'Sistema de ventas por mayor y menor');
$banner1->Dibujar();
?>