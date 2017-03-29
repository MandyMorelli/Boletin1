<?php

class Tabla {

    private $mat = array();
    private $cantFilas;
    private $cantColumnas;

    public function _construct($fi, $co) {
        $this->cantFilas = $fi;
        $this->cantColumnas = $co;
    }

    public function cargar($fila, $columna, $valor) {
        $this->mat[$fila][$columna] = $valor;
    }

    public function inicioTabla() {
        echo '<table border="1">';
    }

    public function inicioFila() {
        echo '<tr>';
    }

    public function mostrar($fi, $co) {
        echo '<td>' . $this->mat[$fi][$co] . '</td>';
    }

    public function finFila() {
        echo '</tr>';
    }

    public function finTabla() {
        echo '</table>';
    }

    public function graficar() {
        $this->inicioTabla();
        for ($f = 0; $f < $this->cantFilas; $f++) {
            $this->inicioFila();
            for ($c = 0; $c < $this->cantColumnas; $c++) {
                $this->mostrar($f, $c);
            }
            $this->finFila();
        }
        $this->finTabla();
    }
    
    public function cargarTodo(){
        $cuenta=0;
         for ($f = 0; $f < $this->cantFilas; $f++) {
            for ($c = 0; $c < $this->cantColumnas; $c++) {
                $cuenta++;
                $this->cargar($f, $c, $cuenta);
            }
         }
    }
    
    public function getMat(){
        return $this->mat;
    }

}

$tabla1 = new Tabla();
$tabla1->_construct($_REQUEST['fila'], $_REQUEST['columna']);
$tabla1->cargarTodo();
$tabla1->graficar();
?>
