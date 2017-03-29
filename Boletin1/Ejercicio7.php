  <?php
          
          class Menu {
              
          private $enlaces = array();
          private $titulos = array();
          
          public function cargarOpcion($en,$tit)
          {
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
          }
          private function mostrarHorizontal()
          {
            for($i=0;$i<count($this->enlaces);$i++)
            {
              echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
              echo "-";
            }
          }
          private function mostrarVertical()
          {
            for($i=0;$i<count($this->enlaces);$i++)
            {
              echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
              echo "<br>";
            }
          }

          public function mostrar($posicion)
          {
            if (strtolower($posicion)=="horizontal")
              $this->mostrarHorizontal();
            if (strtolower($posicion)=="vertical")
              $this->mostrarVertical();
          }
        }

        $menu = new Menu();
        $menu->cargarOpcion('http://elpais.com','El Pais');
        $menu->cargarOpcion('http://www.wordreference.com','Wordreference');
        $menu->cargarOpcion('https://www.google.es','Google');
        $menu->mostrar("horizontal");
        echo '<br>';
        
        $menu1 = new Menu();
        $menu1->cargarOpcion('http://elpais.com','El Pais');
        $menu1->cargarOpcion('http://www.wordreference.com','Wordreference');
        $menu1->cargarOpcion('https://www.google.es','Google');
        $menu1->mostrar("vertical");
        ?>