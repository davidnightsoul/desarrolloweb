<?php
echo "<b>Ingresar 4 valores diferentes de temperaturas del día. Determinar el promedio de ellas. Luego imprimir por pantalla sólo aquellas temperaturas cuya diferencia con el promedio sea mayor a 1.5 grados o menor a -1.5 grados. </b>";

$temp = array(20,30,28,36);
for($i=0;$i<sizeof($temp);$i++){
	$total+=$temp[$i];
}
$promedio= $total/sizeof($temp);
?>