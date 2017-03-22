<?php
echo "<h4>Confeccionar una clase Empleado, definir como atributos su nombre y
sueldo.
Definir un método inicializar que lleguen como dato el nombre y sueldo.
Plantear un segundo método que imprima el nombre y un mensaje si
debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos) </h4><br /><hr /><br /><br />";

//$nomb = $_POST['nombre'];
//$sue = $_POST['sueldo'];


class Empleado { //creo la clase Persona

    private $nombre; //creo variable
    private $sueldo;

    public function inicializar($nom, $sue) { //creo una funcion que recibe parametros
        $this->nombre = $nom;
        $this->sueldo = $sue;
    }

    public function imprimir() { //creo una funcion que va  a imprimir
        echo $this->nombre;
        echo '<br>';
        if ($this->sueldo >= 3000) 
            echo "Tiene que pagar impuestos";
         else 
            echo "No pagas impuestos";
        
    }

}

$emp1 = new Empleado(); //creo el primer objeto
$emp1->inicializar($_POST['nombre'],$_POST['sueldo']);
$emp1->imprimir();
?>