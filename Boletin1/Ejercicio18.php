<?php

class Cuadrado {
  private $lado;
  public function cargarLado($la)
  {
    $this->lado=$la;
  }
  public function retornarPerimetro()
  {
    $p=$this->lado*4;
    return $p;
  }
  public function retornarSuperficie()
  {
    $s=$this->lado*$this->lado;
    return $s;
  }
}

$cuadrado1=new Cuadrado();
$cuadrado1->cargarLado(8);
$x=$cuadrado1;
echo 'La superficie del cuadrado de lado 8 es:'.$x->retornarSuperficie().'<br>';
echo 'El perímetro del cuadrado de lado 8 es:'.$x->retornarPerimetro().'<br>';

?>