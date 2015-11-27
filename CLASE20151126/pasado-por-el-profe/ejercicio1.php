<?php
echo '<b>Ingresar 3 números. Calcular su promedio. Si es mayor a 10, mostrarlo. En ambos casos calcular las diferencias entre cada número y el promedio. </b> <br /><br />';

$a = 30;
$b = 50;
$c = 30;
$prom = $a + $b + $c;
$prom = $prom / 3;

if($prom > 10){
	echo 'El promedio es:' . $prom . '<br />';	
}

$difa = $a - $prom;
$difb = $b - $prom;
$difc = $c - $prom;

echo 'La diferencia del promedio con la variable \'a\' es: '. $difa . '<br />';
echo 'La diferencia del promedio con la variable \'b\' es: '. $difb . '<br />';
echo 'La diferencia del promedio con la variable \'c\' es: '. $difc . '<br />';



?>