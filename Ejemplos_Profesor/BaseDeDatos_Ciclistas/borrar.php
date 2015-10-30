<?php

$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'carreras');


if (mysqli_connect_errno($con)) {
    echo 'FALLO AL CONECTAR MYSQL' . mysqli_connect_error();
}

$sql = "DELETE FROM participantes WHERE IdParticipantes = $id";
    mysqli_query($con, $sql);
    mysqli_close($con);
?>

