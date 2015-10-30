<?php

if (!empty($_POST['Edad'])){
    $edad = $_REQUEST['Edad'];
    echo "La edad es $edad";
} //Per a que no done el error si està buit la entrada de dades
    

if (!empty($_POST['Sexo'])) {
    $sexo = $_POST['Sexo'];
    echo "El sexo es: $sexo <br>";
}
if (!empty($_POST['Extras'])){ 
    $extras = $_POST['Extras'];
    echo "<br> Información de \$extra";
    //print_r($extra); //Per a mostrar el array
    
    foreach ($extras as $extra) {
        echo "$extra <br>";
    }
    
    
}else{
    echo "No has introducido nada.";
}  

$aceptar= $_POST['Aceptar'];

if(isset($aceptar) ){
    echo "Has pulsado el botón aceptar.";
}

$color= $_POST['Color'];
echo "El color escogido es $color";

$idiomas= $_POST['Idiomas'];
foreach ($idiomas as $idioma) {
    echo "<br> $idioma";
}
echo "<br>";
echo $_FILES['Fichero']['name'];
echo "<br>";
print_r($_FILES['Fichero']);

$tmp_name=$_FILES['Fichero']['tmp_name'];
$name = $_FILES['Fichero']['name'];

if (is_uploaded_file($tmp_name)) {
    $nom_carpeta="img/";
    $nombreFichero=$nom_carpeta.$name;
    move_uploaded_file($tmp_name, $nombreFichero);
}  else {
    echo 'error al subir el fichero' . $_FILES['Fichero']['error'];
}

?>