 <?php
        class Celda {
            private $texto;
            private $colorFuente;
            private $colorFondo;
            
            function __construct($text,$fuen,$fon)
            {
              $this->texto = $text;
              $this->colorFuente = $fuen;
              $this->colorFondo = $fon;
            }
            public function dibujar()
            {
             echo '<td style="color:'.$this->colorFuente.';background-color:'.$this->colorFondo.'">'.$this->texto.'</td>';
            }
          }

          class Tabla {
            private $celdas = array();
            private $filas;
            private $columnas;

            public function __construct($fi,$col)
            {
              $this->filas = $fi;
              $this->columnas = $col;
            }

            public function insertar($celd,$fila,$columna)
            {
              $this->celdas[$fila][$columna]=$celd;
            }

            private function inicioTabla()
            {
              echo '<table border="1">';
            }

            private function inicioFila()
            {
              echo '<tr>';
            }

            private function mostrar($fi,$col)
            {
               $this->celdas[$fi][$col]->dibujar(); 
            }

            private function finFila()
            {
              echo '</tr>';
            }

            private function finTabla()
            {
              echo '</table>';
            }

            public function dibujar()
            {
              $this->inicioTabla();
              for($i=1;$i<=$this->filas;$i++)
              {
                $this->inicioFila();
                for($j=1;$j<=$this->columnas;$j++)
                {
                   $this->mostrar($i,$j);
                }
                $this->finFila();
              }
              $this->finTabla();
            }
          }

         /* $tabla1 = new Tabla(4,2);
          $celda = new Celda("titulo 1","#000000","#75a3a3");
          $tabla1->insertar($celda,1,1);
          $celda = new Celda("titulo 2","#000000","#75a3a3");
          $tabla1->insertar($celda,1,2);
          for($i=2;$i<=4;$i++)
          {
            $celda = new Celda("x","#000000",'#eeeeee');
            $tabla1->insertar($celda,$i,1);
            $celda = new Celda("y","#000000",'#eeeeee');
            $tabla1->insertar($celda,$i,2);
          }*/
          
          $tabla = new Tabla(4,2);
          $celda = new Celda("Mes","#000000","#ffcc66");
          $tabla->insertar($celda,1,1);
          $celda = new Celda("Ahorros","#000000","#ffcc66");
          $tabla->insertar($celda,1,2);
          $celda = new Celda("Abril","#000000","#99ff66");
          $tabla->insertar($celda,2,1);
          $celda = new Celda("10€","#000000","#ccffff");
          $tabla->insertar($celda,2,2);
          $celda = new Celda("Mayo","#000000","#99ff66");
          $tabla->insertar($celda,3,1);
          $celda = new Celda("60€","#000000","#ccffff");
          $tabla->insertar($celda,3,2);
          $celda = new Celda("Junio","#000000","#99ff66");
          $tabla->insertar($celda,4,1);
          $celda = new Celda("35€","#000000","#ccffff");
          $tabla->insertar($celda,4,2);
          
          
          
          
          $tabla->dibujar();
        ?>