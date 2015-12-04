<?php

$numero = $_POST['numero'];
$poscion = $_POST['posicion'];

$menu1=new menus($numero, $poscion);

if ($poscion=="vertical") {
   $menu1->mostar_vertical($numero); 
}else{
    $menu1->mostar_horizontal($numero);
}


class menus {
    
private $numero;
private $poscion;
    
    public function __construct($num, $pos) {
        $this->numero=$num;
        $this->poscion=$pos;       
        
        
    }
    
    function mostar_vertical($num){
        
        for ($index = 0; $index < $num; $index++) {
            echo '<a href="#">';
            echo "menu$index ";
            echo '<br>';
            echo '</a>';
        }
    }
    
    function mostar_horizontal($num){
        
        for ($index = 0; $index < $num; $index++) {
            echo '<a href="#">';
            echo '&nbsp&nbsp';
            echo "menu$index ";
            echo '</a>';
            
        }
    }
    
}
