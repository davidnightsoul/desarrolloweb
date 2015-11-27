<?php
echo '<b>Ingresar 4 valores diferentes de temperaturas del día. Determinar el promedio de ellas. Luego imprimir por pantalla sólo aquellas temperaturas cuya diferencia con el promedio sea mayor a 1.5 grados o menor a -1.5 grados.</b> <br /><br />';

$temp1 = 25;
$temp2 = 23.5;
$temp3 = 30.8;
$temp4 = 26.7;

$prom  = $temp1 + $temp2 + $temp3 + $temp4;
$prom  = $prom / 4;

$dif1  = $prom - $temp1;
$dif2  = $prom - $temp2;
$dif3  = $prom - $temp3;
$dif4  = $prom - $temp4;

if($dif1 > 1.5 || $dif1 < -1.5) {
	echo "La primer temperatura fue de: " . $temp1 . " grados <br/>";
}


if($dif2 > 1.5 || $dif2 < -1.5) {
	echo "La segunda temperatura fue de: " . $temp2 . " grados <br/>";
}

if($dif3 > 1.5 || $dif3 < -1.5) {
	echo "La tercer temperatura fue de: " . $temp3 . " grados <br/>";
}

if($dif4 > 1.5 || $dif4 < -1.5) {
	echo "La cuarta temperatura fue de: " . $temp4 . " grados <br/>";
}

?>