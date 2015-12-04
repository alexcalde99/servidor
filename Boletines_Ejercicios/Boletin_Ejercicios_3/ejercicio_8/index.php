<?php

include './tabla.php';
include './celda.php';

$tabla1=new Tabla(5,3);
$tabla1->cargar(1,1,"Columna 1","white","blue");
$tabla1->cargar(1,2,"Columna 2","white","blue");
$tabla1->cargar(1,3,"Columna 3","white","blue");
for($f=2;$f<=10;$f++)
{
  $tabla1->cargar($f,1,"texto1","orange","white");
  $tabla1->cargar($f,2,"texto2","orange","white");
  $tabla1->cargar($f,3,"texto3","orange","white");
}
$tabla1->graficar();

