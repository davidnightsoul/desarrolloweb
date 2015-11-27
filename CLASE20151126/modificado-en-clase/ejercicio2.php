<?php
echo '<b>Calcular el área de un triángulo, conociendo la base, y sabiendo que su altura es igual al cuadrado de la base. (Observar que la altura no es un dato... sólo se indica la forma de calcularla de acuerdo a la base que sí es un dato) </b> <br /><br />';

$base = 25;

$altura = $base * $base;

//$altura = pow($base, 2);

$area = $base * $altura;

echo "La superficie del triángulo es: " . $area;


?>