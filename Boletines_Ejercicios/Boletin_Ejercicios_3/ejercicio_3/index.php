<!DOCTYPE html>
<!--
Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. Mostrar 
el menú en forma horizontal o vertical (según que método llamemos).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        <title></title>
    </head>
    <body>
        <h3>Contruccion de menús</h3>
        <form class="form" action="menus.php" method="POST">
            Numero de opciones:<input type="text" name="numero" value="" /><br><br>
            Tipo de Menu(Horizontal/vertical):<select name="posicion">
                <option>vertical</option>
                <option>horizontal</option>
            </select><br><br>
            <input type="submit" value="enviar" name="enviar" />
        </form>
        
    </body>
</html>
