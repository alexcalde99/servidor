<?php

include './connectDB.php';
/* 
 
 */
$table = "usuarios";


$user = $_POST['user'];  
$password = $_POST['password'];
$email = $_POST['email'];

$db = connect();

$sql = "INSERT INTO usuarios (nombre, clave, email) VALUES ('$user', '$password', '$email');";
if(mysqli_query($db, $sql)){
    echo "Usuario guardado correctamente.<br />";
} else {
    echo "ERROR AL GUARDAR EL USUARIO<br />";
}

disconnect($db);