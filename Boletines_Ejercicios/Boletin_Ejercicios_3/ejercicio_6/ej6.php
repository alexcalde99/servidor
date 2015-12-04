<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php

        class Tabla {

            private $mat = array();
            private $colorFuente = array();
            private $colorFondo = array();
            private $cantFilas;
            private $cantColumnas;

            public function __construct($fi, $co) {
                $this->cantFilas = $fi;
                $this->cantColumnas = $co;
            }

            public function cargar($fila, $columna, $valor, $cfue, $cfon) {
                $this->mat[$fila][$columna] = $valor;
                $this->colorFuente[$fila][$columna] = $cfue;
                $this->colorFondo[$fila][$columna] = $cfon;
            }

            public function inicioTabla() {
                echo '<table border="2">';
            }

            public function inicioFila() {
                echo '<tr>';
            }

            public function mostrar($fi, $co) {
                echo '<td style="color:' . $this->colorFuente[$fi][$co] . ';background-color:' . $this->colorFondo[$fi][$co] . '">' . $this->mat[$fi][$co] . '</td>';
            }

            public function finFila() {
                echo '</tr>';
            }

            public function finTabla() {
                echo '</table>';
            }

            public function graficar() {
                $this->inicioTabla();
                for ($f = 1; $f <= $this->cantFilas; $f++) {
                    $this->inicioFila();
                    for ($c = 1; $c <= $this->cantColumnas; $c++) {
                        $this->mostrar($f, $c);
                    }
                    $this->finFila();
                }
                $this->finTabla();
            }

        }

        $tabla1 = new Tabla(10, 3);
        
        //las 3 ptimeras es para determinar el titulo de las 3 columnas
        $tabla1->cargar(1, 1, "columna 1", "#356AA0", "#FFFF88");
        $tabla1->cargar(1, 2, "columna 2", "#356AA0", "#FFFF88");
        $tabla1->cargar(1, 3, "columna 3", "#356AA0", "#FFFF88");
        for ($f = 2; $f <= 10; $f++) {  //empiza en fila 2 para no escribir en el titulo
            //determinamos el texto/color/ de cada fila
            $tabla1->cargar($f, 1, "texto", "blue", "grey");
            $tabla1->cargar($f, 2, "texto", "red", "yellow");
            $tabla1->cargar($f, 3, "texto", "green", "greenyellow");
        }
        $tabla1->graficar();
        ?>
    </body>
</html>

