<?php

$tiempo = $_POST['tiempo'];
$distancia = $_POST['distancia'];


$tiempomedio = calcularMedia($distancia, $tiempo);

function calcularMedia($dist, $tiemp) {

    $StringTiempo = $tiemp;

    $array = explode(":", $tiemp);  //divide el String por : y lo situa en posiciones del array
    //las posiciones del array las divido en variables horas, minutos y segundos para trabaar con ellas
    $horas = $array[0];
    $minutos = $array[1];
    $segundos = $array[2];

    //comprobar que los formatos sean correctos
    if ($horas >= 0 & $horas <= 23 & $minutos >= 0 & $minutos <= 59 & $segundos >= 0 & $segundos <= 59) {



        //Paso las horas y minutos a segundos
        $horasEnSegundos = $horas * 3600;
        $minutosEnSegundos = $minutos * 60;

        //sumo todo para tenerlo en segundos
        $totalEnSegundos = $horasEnSegundos + $minutosEnSegundos + $segundos;

        //paso los metros a Km para poder calcular la media de 1km
        $distanciaEnKm = $dist / 1000;


        //Tengo la media de segundos que se tarda para 1km
        $tiempoMedioEnSegundos = $totalEnSegundos / $distanciaEnKm;
        $tiempoMedioRedondeado = round($tiempoMedioEnSegundos);

        //LA FUNCION DEVUELVE LA MEDIA EN FORMATO HH:MM:SS
        $totalMedia = conversorSegundosHoras($tiempoMedioRedondeado);




        echo "<h2>CALCULADORA RITMO MEDIO";
        mostrar_plan($distanciaEnKm, $StringTiempo, $totalMedia);
    } 
    else {
        echo "Formato tiempo introducido ERRONEO";
    }
}

/*
 * Esta funcion convierte los segundos en FORMATO HH:MM:SS y los devuelve 
 */

function conversorSegundosHoras($tiempo_en_segundos) {
    $horas = floor($tiempo_en_segundos / 3600);
    $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
    $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

    return $minutos . ":" . $segundos;
}

/*
 * Muestra el plan de carrera en una tabla 
 */

function mostrar_plan($kms, $tiempoTotal, $tiempoMedio) {

    print "<table border='2'>";
    print "<tr><td>Distancia(Kilometros)</td><td>Tiempo Total</td><td>Tiempo Medio</td>";
    print "<tr><td>$kms</td><td>$tiempoTotal</td><td>$tiempoMedio</td>";
}
