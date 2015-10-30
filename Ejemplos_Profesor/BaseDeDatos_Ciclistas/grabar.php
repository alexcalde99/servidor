<?php

$apellidos = $_POST['Apellidos'];
$nombre = $_POST['Nombre'];
$poblacion = $_POST['Poblacion'];
$club = $_POST['Club'];


$con = mysqli_connect('localhost', 'root', '', 'carreras');

if (mysqli_connect_errno($con)) {
    echo 'FALLO AL CONECTAR MYSQL' . mysqli_connect_error();
}

$sql = "INSERT INTO participantes (Apellidos, Nombre, Poblacion, CLUB) VALUES ('$apellidos' ,
            '$nombre' , '$poblacion' , '$club')";


if (!mysqli_query($con, $sql)) {
    die('Error:' . mysqli_error($con));
} else {
    echo "REGISTROS AÑADIDOS SATISFACTORIAMENTE";
}

mysqli_close($con);
?>

