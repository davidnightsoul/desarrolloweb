<?php
echo "<b>Ingresar 4 valores diferentes de temperaturas del día. Determinar el promedio de ellas. Luego imprimir por pantalla sólo aquellas temperaturas cuya diferencia con el promedio sea mayor a 1.5 grados o menor a -1.5 grados. </b>";

//Práctico hecho con array/vector
//20151117

//$temp = array(20,30,28,36); //forma harcodeada de poner temperatura
for($i=0;$i<4;$i++){
	$temp[$i]=rand(-20,45); //temperatura aleatoria entre -20 y 45 con función rand()
}
echo "</br> Las temperaturas son:</br>";
for($i=0;$i<sizeof($temp);$i++){
	$total+=$temp[$i];
	echo $temp[$i]."ºC</br>";
}
$promedio= $total/sizeof($temp);
echo "</br> El promedio de temperatura es:</br>" .$promedio."ºC</br>";

echo "</br> Temperaturas cuya diferencia con el promedio sea mayor a 1.5 grados o menor a -1.5 grados:</br>";
for($i=0;$i<sizeof($temp);$i++){
	if($temp[$i]>($promedio+1.5) || $temp[$i]<($promedio-1.5)){
		$tempDif [$i]= $temp[$i]; //almaceno en un array 
		echo $temp[$i]."ºC</br>";
	}
}

?>