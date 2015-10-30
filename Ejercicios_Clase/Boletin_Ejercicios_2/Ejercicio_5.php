<?php

$simbolo = $_POST['simbolo'];
$columnas = $_POST['columnas'];



piramide($simbolo, $columnas);

function piramide($simb, $colum) {

    //index tendra el mismo valor que las columnas y se ira reduciendo hasta llegar a 1
    //ira imprimiendo el simbolo una vez menos
    for ($index = $colum; $index > 0; $index--) {
        for ($index1 = $index; $index1 > 0; $index1--) {
            echo "$simb";
        }
        echo "<br>";
    } 


}
