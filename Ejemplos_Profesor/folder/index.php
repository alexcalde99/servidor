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
        <form name="Form1" action="dos.php" method="POST" enctype="multipart/form-data">
            
            Edad:<input type="text" name="Edad" value="" required /> 
            
            <br>
            
            <input type="radio" name="Sexo" value="M" /> Mujer
            <br>
            
            <input type="radio" name="Sexo" value="H" /> Hombre
            <br>
            
            <input type="checkbox" name="Extras[]" value="Garaje" /> Garaje
            <input type="checkbox" name="Extras[]" value="Piscina" /> Piscina
            <input type="checkbox" name="Extras[]" value="Jardín" /> Jardín
            
            Color: 
            <select name="Color">
                <option value="Rojo"> Rojo</option>
                <option value="Verde"> Verde</option>
                <option value="Azul"> Azul</option>
            </select>
            
            Idiomas:
            <select name="Idiomas[]" size="3" multiple="multiple">
                <option value="Ingles"> Inglés</option>
                <option value="Frances"> Francés</option>
                <option value="Aleman"> Alemán</option>
            </select>
            
            <input type="file" name="Fichero" value="" />
            
            <input type="submit" value="Aceptar" name="Aceptar" />
            
            
            
            
        </form>
        
        
    </body>
</html>
