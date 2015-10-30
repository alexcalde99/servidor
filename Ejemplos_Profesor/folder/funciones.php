<?php

    function muestraNombre($titulo = "Sr.") {
        echo "Estimado $titulo: <br>";
        
        
}
muestraNombre();
muestraNombre("Pepito");

   function muestraNombre2($nombre , $titulo = "Sr.") {
        echo "Estimado $titulo $nombre <br>";
   }
   
muestraNombre2("Pepito2");
muestraNombre2("Pepito2","Prof");
        



