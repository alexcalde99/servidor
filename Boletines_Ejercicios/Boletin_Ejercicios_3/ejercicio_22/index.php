<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
// instancias
///////////////////////////////////////////////////////////////////////////////////////////////////////
$numero1=5;
$numero2=3;
echo "La suma de $numero1 y $numero2 es:".Calculadora::sumar($numero1,$numero2);
echo '<br>';
echo "La diferencia de $numero1 y $numero2 es:".Calculadora::restar($numero1,$numero2);
echo '<br>';
echo "La multiplicacion de $numero1 y $numero2 es:".Calculadora::multiplicar($numero1,$numero2);
echo '<br>';
echo "La division de $numero1 y $numero2 es:".Calculadora::dividir($numero1,$numero2);






///////////////////////////////////////////////////////////////////////////////////////////////////////
//Clase empleado
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Calculadora {
    public static function sumar($valor1,$valor2){
        return $valor1+$valor2;
    }
    public static function restar($valor1,$valor2){
        return $valor1-$valor2;
    }
    public static function multiplicar($valor1,$valor2){
        return $valor1*$valor2;
    }
    public static function dividir($valor1,$valor2){
        return $valor1/$valor2;
    }
}

