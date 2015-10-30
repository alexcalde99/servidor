<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        } else {
            $pagina = 1;
        }
        //variables para la paginacion
        $TAMANY_PAGINA = 25;
        $inicio = ($pagina - 1) * $TAMANY_PAGINA;
        // CONEXION CON LA BASE DE DATOS:
        $con = mysqli_connect('localhost', 'root', '', 'carreras');

        if (mysqli_connect_errno($con)) {
            echo ' FALLO AL CONECTAR MYSQL' . mysqli_connect_error();
        } else {
            $sql = "SELECT * FROM participantes ORDER BY Apellidos LIMIT $inicio,$TAMANY_PAGINA";
            $result = mysqli_query($con, $sql);

            //OBTENER EL NUMERO DE REGISTRES TOTALS:

            $sql2 = "SELECT * FROM participantes";
            $totalFilas = mysqli_query($con, $sql2);
            $numTotalRegistros = mysqli_num_rows($totalFilas);
            echo 'Total registros: ' . $numTotalRegistros . "<br />";

            /* //OBTENER EL NUMERO DE REGISTRES TOTALS FENTO EN UN COULD:
              $sql2 = "SELECT COUNT(*) as result FROM participantes";
              $result2 = mysqli_query($con, $sql2);
              //print_r($result2);

              foreach ($result2 as $res) {
              $totalRegistres = $res['total'];



              } */

            //CALCULAR EL TOTAL DE PAGINAS
            $totalPaginas = ceil($numTotalRegistros / $TAMANY_PAGINA);
            echo "Total paginas: " . $totalPaginas . "<br/>";
            echo "<a href = 'insertar.php'> Insertar </a>";

            echo '<table border=1>';

            echo '<tr>';
            echo '<td> Apellidos </td>';
            echo '<td> Nombre </td>';
            echo '<td> Poblacion </td>';
            echo '<td> Club </td>';
            echo '<tr>';

            foreach ($result as $fila) {
                //print_r($fila);

                echo '<tr>';

                echo '<td>';
                echo $fila['Apellidos'];
                echo '</td>';

                echo '<td>';
                echo $fila['Nombre'];
                echo '</td>';

                echo '<td>';
                echo $fila['Poblacion'];
                echo '</td>';

                echo '<td>';
                echo $fila['CLUB'];
                echo '</td>';

                echo '<td>';
                echo $fila['CLUB'];
                echo '</td>';

                echo '<td>';
                echo "<a href = 'borrar.php?id=" . $fila['IdParticipante'] . " '> Borrar / </a>";
                echo "<a href = 'editar.php?id=" . $fila['IdParticipante'] . " '> Editar </a>";
                echo '</td>';

                echo '</tr>';
            }

            echo '</table>';

            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo "<a href = 'index.php?pagina=$i'>$i </a> ";
            }

            mysqli_close($con);
        }
        ?>
    </body>
</html>
