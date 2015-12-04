<!DOCTYPE html>
<!--
4 - Métodos de una clase. Problema:
Confeccionar una clase CabeceraPagina que permita mostrar un título, 
indicarle si queremos que aparezca centrado, a derecha o izquierda, 
además permitir definir el color de fondo y de la fuente
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        <form name="form" action="cabeceraPagina.php" method="POST">
            Titulo:<input type="text" name="titulo" value="" size="35" />
            Posicion:<select name="posicion">
                <option>center</option>
                <option>right</option>
                <option>left</option>                
            </select>
            ColorFondo:<select name="colorFondo">
                <option>blue</option>
                <option>green</option>
                <option>red</option>
            </select>
            Color Fuente:<select name="colorFuente">
                <option>blue</option>
                <option>green</option>
                <option>red</option>
            </select>            
            <input type="submit" value="enviar" name="enviar" />
        </form>
    </body>
</html>
