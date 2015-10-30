<?php

    $id = $_GET['id'];
    $apellidos = $_POST['Apellidos'];
    $nombre = $_POST ['Nombre'];
    $poblacion = $_POST ['Poblacion'];
    $club = $_POST ['Club'];
 
    $con = mysqli_connect('localhost', 'root', '', 'carreras');


    if (mysqli_connect_errno($con)) {
      echo 'FALLO AL CONECTAR MYSQL' . mysqli_connect_error();
    }
    
    $sql = "UPDATE participantes SET Apellidos = '$apellidos', Nombre = '$apellidos',
        Poblacion = '$poblacion', Club = '$club' WHERE IdParticipante = $id ";
    
    
    mysqli_query($con, $sql);
    mysqli_close($con);

?>