<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Empleado {
            
            private $nombre;
            private $sueldo;
        
            function inicializar($nombre,$sueldo){
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
            }
            
            function impuestos(){
                
                if ($this->sueldo>3000)
                     echo $this->nombre." paga impuestos";
                else
                     echo $this->nombre." no paga impuestos";
                     echo '<br>';
            }
        }

            $empleado = new Empleado();
            $empleado->inicializar("Andrea",1600);
            $empleado->impuestos();
            $empleado = new Empleado();
            $empleado->inicializar("Alberto",3500);
            $empleado->impuestos();
            
      ?>