<?php
echo '<b>Calcular el �rea de un tri�ngulo, conociendo la base, y sabiendo que su altura es igual al cuadrado de la base. (Observar que la altura no es un dato... s�lo se indica la forma de calcularla de acuerdo a la base que s� es un dato) </b> <br /><br />';

$base = 25;

$altura = $base * $base;

//$altura = pow($base, 2);

$area = $base * $altura;

echo "La superficie del tri�ngulo es: " . $area;


?>