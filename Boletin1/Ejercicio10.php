<?php
class Empleado {
  private $nombre;
  private $sueldo;
  public function __construct($nom,$sue=1000)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function imprimir()
  {
    echo 'Nombre:'.$this->nombre.' - Sueldo:'.$this->sueldo.'<br>';
  } 
}

$empleado1=new Empleado('Hector',3300);
$empleado1->imprimir();
$empleado2=new Empleado('Erika');
$empleado2->imprimir();

?>
