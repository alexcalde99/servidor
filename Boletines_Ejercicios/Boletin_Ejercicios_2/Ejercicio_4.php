<?php

$simbolo = $_POST['simbolo'];
$columnas = $_POST['columnas'];



cuadrado($simbolo, $columnas);

function cuadrado($sim, $colum) {
    $array[][] = '';
    
    //doble for para ir rellenando las filas y las columnascon el simbolo introducido
    // $i rellena las filas y $j rellena las columnas
    for ($i = 0; $i < $colum; $i++) {
        for ($j = 0; $j < $colum; $j++) {
             $array[$i][$j]=$sim;  //
        }
    }   
    

//doble for para imprimir las filas y las columnas
    //$i imprime las filas y $j imprime las columnas, cuando se ha completado una fila pega salto de linea
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j];
            
        }
        echo '<br>';
    }
}
