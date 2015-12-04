<!DOCTYPE html>
<!--
//EJERCICIO CON SWITCH
24) Hacer una página en PHP que para una nota almacenada en una variable,muestre por pantalla lo siguiente:
a) Si la nota es menor que 5 -> “suspenso”
b) Si la nota está entre 5 y 6 -> “aprobado”
c) Si la nota está entre 6 y 7 -> “bien”
d) Si la nota está entre 7 y 8 -> “notable”
e) Si la nota es mayor que 8 -> “sobresaliente”
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        
        
        
    </head>
    <body>
        <?php
        
        $nota=$_POST['nota'];
        echo "$nota -->";

        switch ($nota) {
            case 1:
            case 2:
            case 3:
            case 4:
                echo "Suspenso";
                break;
            case 5:
                echo "Aprobado";

                break;
            case 6:
                echo "Bien";
                break;
            case 7:
                echo "Notable";
                break;
            case 8:
            case 9:
            case 10:
                echo "Excelente";
                break;
            default:
                break;
        }
        ?>
    </body>
</html>
