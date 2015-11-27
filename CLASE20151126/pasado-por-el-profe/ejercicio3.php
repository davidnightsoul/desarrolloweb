<?php
echo '<b>Dados los cuatro últimos sueldos de un empleado, determine el mayor de ellos y si supera los 12000 pesos, calcule un descuento del 2% e imprima el monto del descuento y el sueldo. </b> <br /><br />';

$sdo1 = 12000;
$sdo2 = 13000;
$sdo3 = 14500;
$sdo4 = 14000;
$mayor = 0;

if($sdo1 > $sdo2 && $sdo1 > $sdo3 && $sdo1 > $sdo4){
	$mayor = $sdo1;
} else {
	if($sdo2 > $sdo3 && $sdo2 > $sdo4) {
		$mayor = $sdo2;	
	} else {
		if($sdo3 > $sdo4){
			$mayor = $sdo3;
		} else {
			$mayor = $sdo4;
		}
	}
}

if($mayor > 12000) {
	$dto = ($mayor * 2)/100;
	echo "El descuento es de: " . $dto . "<br/>";
	echo "El sueldo mayor con descuento es de: " . ($mayor - $dto) . "<br/>";
}

echo "El sueldo mayor es de: " . $mayor . "<br/>";



?>