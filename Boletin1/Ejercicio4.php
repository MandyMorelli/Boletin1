<?php
echo "<h1>Elaborar una página PHP que contenga una función cuadrado que "
 . "recibe 2 parámetros </h1><br /><hr /><br /><br />";

function cuadrado() {
    $caract = $_POST['caract'];
    $num = $_POST['num'];
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $num; $j++) {

            echo $caract;
        }
        echo "<br>";
    }
}

echo cuadrado();
?>
