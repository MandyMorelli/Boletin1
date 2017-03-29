<?php
        
        class CabeceraPagina {
            
        private $titulo;
        private $ubicacion;
        private $fondo;
        private $fuente;
        
        public function __construct($tit,$ubi,$fond,$fuent){
            $this->titulo = $tit;
            $this->ubicacion = $ubi;
            $this->fondo = $fond;
            $this->fuente = $fuent;
        }
        
        public function dibujar(){   
            echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
            echo $this->fuente.';background-color:'.$this->fondo.'">';
            echo $this->titulo;
            echo '</div>';
        }
    }

        $cabecera = new CabeceraPagina('El blog de Amanda','center','#99e6ff','#cc33ff');
        $cabecera->dibujar();
        
        ?>