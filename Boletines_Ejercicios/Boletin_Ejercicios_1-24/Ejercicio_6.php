<!DOCTYPE html>
<!--
Se pide realizar un generador para una apuesta del juego de Euromillones. 
Para una apuesta hay que obtener al azar cinco números principales de una lista de 50(del 1 al 50)
y además otros dos números de una lista de nueve(del 1 al 9) llamados “estrellas”. 
Utilizar la función rand() o la función mejorada mt_rand().  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php                
           
        echo "<b>Numeros aletarios entre 1 y 50</b><br>";
            for ($i = 0; $i < 5; $i++) {
              $numero_Aleatorio =  mt_rand(1, 50);            
               $total = $numero_Aleatorio;              
               echo $total . " ";            
            }
           
        ?>
    </body>
</html>
