<?php

class Menu {

    private $enlaces = array();
    private $titulos = array();

    public function cargarOpcion($enlace, $titulo) {
        $this->enlaces[] = $enlace;
        $this->titulos[] = $titulo;
    }

    private function mostrarHorizontal() {
        echo "Menu horizontal<br>";        
        for ($f = 0; $f < count($this->enlaces); $f++) {
            echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
            echo "_____";
        }        
    }

    private function mostrarVertical() {
        echo "<br>";        
        echo "Menu Vertical<br>";
        for ($f = 0; $f < count($this->enlaces); $f++) {
            echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
            echo "<br>";
        }
       }

    public function mostrar($orientacion) {
        if ($orientacion == "horizontal") {
            $this->mostrarHorizontal();
        } elseif ($orientacion == "vertical") {
            $this->mostrarVertical();
        } else {
            echo "orintacion incorrecta";
        }
    }
}  