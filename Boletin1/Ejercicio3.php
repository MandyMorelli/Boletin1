<?php
 
        class Menu {
            
        private $enlaces = array();
        private $titulos = array();
        public function cargarOpcion($en,$tit){
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }
        
        public function mostrarHorizontal(){
            for($i=0;$i<count($this->enlaces);$i++){
                echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                echo "-";
            }
        }
        public function mostrarVertical(){
            for($i=0;$i<count($this->enlaces);$i++){
                echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                echo "<br>";
            }
        }
    }

        $menu = new Menu();
        $menu->cargarOpcion('http://elpais.com','El Pais');
        $menu->cargarOpcion('http://www.wordreference.com','Wordreference');
        $menu->cargarOpcion('https://www.google.es','Google');
        $menu->mostrarHorizontal();
        ?>