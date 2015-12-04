<?php
include './menu.php';

$menu1=new Menu();
$menu1->cargarOpcion('http://www.marca.com','Marca');
$menu1->cargarOpcion('http://www.elpais.com','El Pais');
$menu1->cargarOpcion('http://www.elmundo.com','El Mundo');
$menu1->mostrar("horizontal");
echo '<br>';
$menu2=new Menu();
$menu2->cargarOpcion('http://www.marca.com','Marca');
$menu2->cargarOpcion('http://www.elpais.com','El Pais');
$menu2->cargarOpcion('http://www.elmundo.com','El Mundo');
$menu2->mostrar("vertical");
