<?php
echo "<b>Dados los cuatro últimos 4 sueldos de un empleado, determine el mayor de ellos y si supera los 12000 pesos, calcule un descuento de 2% e imprima el monto del descuento y el sueldo</b></br>";
$sdo1=12000;
$sdo2=13000;
$sdo3=14500;
$sdo4=14000;

//OPCION 1 PARA ENCONTRAR EL MAYOR con if anidados
if($sdo1>$sdo2 && $sdo1>$sdo3 && $sdo1>$sdo4){
	$mayor=$sdo1;
}elseif($sdo2>$sdo3 && $sdo2>$sdo4){
	$mayor=$sdo2;
}elseif($sdo3>$sdo4){
	$mayor=$sdo3;
}else{
	$mayor=$sdo4;
}

//OPCION 2 PARA ENCONTRAR EL MAYOR con funcion max
$mayorn = max($sdo1,$sdo2);
$mayorn = max($mayorn,$sdo3);
$mayorn = max($mayorn,$sdo4);
echo("</br>con funcion max: " . $mayorn);

//OPCION 3 PARA ENCONTRAR EL MAYOR con for
$mayorn=$sdo1;
for ($i=1;$i<=4;$i++){
	//${"var".$i}
	$mayorn = max($mayorn,${"sdo".($i+1)});
}
echo("</br>con for:" . $mayorn);

//OPCION 4 PARA ENCONTRAR EL MAYOR con array (no funciona aun)
/*$sueldo [0]= $sdo1;
$sueldo [1]= $sdo2;
$sueldo [2]= $sdo3;
$sueldo [3]= $sdo3;*/
$sueldo = array($sdo1,$sdo2,$sdo3,$sdo4);
$mayorn=$sueldo[0];
for ($i=0;$i<sizeof($sueldo);$i++){
	//${"var".$i}
	$mayorn = max($mayorn,${"sueldo[".$i."]"});
}
echo("</br>con array: " . $mayorn);

echo "</br> El sueldo mayor fue $mayor";
if($mayor>12000){
	echo "</br> El sueldo supera los 12000 entonces:";
	$descuento=$mayor*0.02;	
	$mayor=$mayor - $descuento;
	echo "</br> Descuento de $descuento";	
	echo "</br> El nuevo sueldo seria: $mayor";	
}


?>