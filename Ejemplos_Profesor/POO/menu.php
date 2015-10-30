<?php

/**
 * 
 */
class Menu {

    private $enlaces = array();
    private $titulos = array();

    function cargarOpcion($en, $tit) {
        $this->enlaces[] = $en;

        $this->titulos[] = $tit;
    }

    public function mostrar() {    
        /*
         * 
         */       

        for ($i = 0; $i < count($this->enlaces); $i++) {
            echo '<a href="' . $this->enlaces[$i] . '">' . $this->titulos[$i] . '</a> ';
        }
    }

}

$menu1 = new Menu();
$menu1->cargarOpcion("http://www.google.com", "Buscador Google<br>");
$menu1->cargarOpcion("http://www.yahoo.com", "Buscador Yahoo<br>");
$menu1->cargarOpcion("http://www.msn.com", "MSN<br>");
$menu1->cargarOpcion("http://www.marca.com", "Marca<br>");

$menu1->mostrar();
?>