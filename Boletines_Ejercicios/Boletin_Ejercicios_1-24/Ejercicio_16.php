<!DOCTYPE html>
<!--
16) Hacer una página en PHP que muestre los 20 primeros términos de la sucesión 
de Fibonacci.La sucesión de Fibonacci se caracteriza por tener el primer 
elemento:1, el segundo elemento: 1 y el resto de elementos : se forman sumando 
los 2 términos anteriores -> 1 ,1 , 2, 3, 5 ,…..
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php       
        
        echo "<b>20 primeros términos de la sucesión de Fibonacci.</b><br>";
        $maximo = 20;       
        $arrayFibonacci = [1,1];         
        
        $i = 2; //$i es 2 porque el proximo elemento estara en la posicion 2 del array
        while($i < $maximo){
            $arrayFibonacci[$i] = $arrayFibonacci[$i-1] + $arrayFibonacci[$i-2];
            //Empiza por la posicion 2 del array y va sumando las 2 anteriores;
            $i++;
        }
        for ($i = 0; $i < count($arrayFibonacci); $i++) {
            echo "$arrayFibonacci[$i]" . ",";
        }
        //print_r($fibonacci);
        
//        $i=2;
//        $arrayFibonacci=[1,1];
//        $maximo=20;
//        $numero=0;
//        while ($i < $maximo) {
//            $arrayFibonacci[$i] = $arrayFibonacci[$i-1] + $arrayFibonacci[$i];
//            //$numero=($arrayFibonacci[$i] + $arrayFibonacci[$i+1]);
//            //array_push($arrayFibonacci, $numero); 
//            $i++;
//        }
//        print_r($arrayFibonacci);
        ?>
    </body>
</html>
