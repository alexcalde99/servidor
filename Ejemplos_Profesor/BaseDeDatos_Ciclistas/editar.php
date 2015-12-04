<?php

    $store_id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'carreras');


    if (mysqli_connect_errno($con)) {
      echo 'FALLO AL CONECTAR MYSQL' . mysqli_connect_error();
    }
    $sql="SELECT * FROM participantes WHERE IdParticipante = $store_id";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($result)) {
        $apellidos = $row['Apellidos'];
        $nombre = $row['Nombre'];
        $poblacion = $row ['Poblacion'];
        $club = $row ['CLUB'];
        
    
}
?>


<form name = "Form1" action="actualizar.php?id=<?php echo $store_id ?>" method = "POST">
        
        Apellidos: <input type="text" name="Apellidos" value="<?php echo $apellidos?>" /><br/>
        Nombre : <input type="text" name="Nombre" value="<?php echo $nombre?>" /><br/>
        Poblacion: <input type="text" name="Poblacion" value="<?php echo $poblacion?>" /><br/>
        Club: <input type="text" name="Club" value="<?php echo $club?>" /><br/>
        <input type="submit" value="Actualizar" name="Actualizar" />
        
    </form>
