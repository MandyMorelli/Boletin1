<?php

abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
}  

class Empleado extends Trabajador {
}

class Gerente extends Trabajador {
}

$vec[]=new Empleado('Hector',1300);
$vec[]=new Empleado('Erika',1100);
$vec[]=new Empleado('Oscar',1000);

$vec[]=new Gerente('Lucas',23000);
$vec[]=new Gerente('German',7000);

$may=-1;
$nom='';
for($f=0;$f<count($vec);$f++)
{
  if ($vec[$f] instanceof Gerente)
  {
    if ($vec[$f]->retornarSueldo()>$may)
    {
      $may=$vec[$f]->retornarSueldo();
      $nom=$vec[$f]->retornarNombre();
    }
  }
}
echo 'El nombre del gerente con mayor sueldo es:'.$nom.'<br>';
echo 'Y tiene un sueldo de :'.$may.'<br>';

?>