
<!--/*
 * Confeccionar la clase Tabla vista en conceptos anteriores. Plantear una clase Celda que colabore con 
 * la clase Tabla. La clase Tabla debe definir una matriz de objetos de la clase Celda.
En la clase Tabla definir un método insertar que llegue un objeto de la clase Celda y además dos 
 * enteros que indiquen que posición debe tomar dicha celda en la tabla. La clase Celda debe definir 
 * los atributos: $texto, $colorFuente y $colorFondo.
 */-->
<?php
include './tabla.php';
include './celda.php';

$tabla1 = new Tabla(5, 2);  //creamos una tabla con 5 filas y 2 columnas
$celda = new Celda('Columna 1', "white", "blue");//creamos la celda 
$tabla1->insertar($celda, 1, 1);//insertaos la celda en la fila 1 columna 1
$celda = new Celda('Columna 2', "white", "blue");
$tabla1->insertar($celda, 1, 2);

for ($f = 2; $f <= 5; $f++) {
    $celda = new Celda("texto1", "orange", "white");
    $tabla1->insertar($celda, $f, 1);
    $celda = new Celda("texto2", "orange", "white");
    $tabla1->insertar($celda, $f, 2);
}

$tabla1->graficar();

