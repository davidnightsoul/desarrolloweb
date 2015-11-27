<?php
$nro1 = $_POST["txtNro1"];
$nro2 = $_POST["txtNro2"];
	
if(isset($nro1) && isset($nro2)){
	$valBtn = $_POST["btn"];
	$nro1 = intval($nro1);
	$nro2 = $nro2 + 0;
	//$nro2 = (int) $nro2;
	
	$operacion = " + ";
	switch($valBtn){
		case "Sumar":
			$resultado = $nro1 + $nro2;	
			break;
		case "Multiplicar":
			$resultado = $nro1 * $nro2;
			$operacion = " * ";
			break;
		case "Dividir":
			$operacion = " / ";
			if ($nro2===0) {
				$resultado = error;
				break;
			}
			$resultado = $nro1 / $nro2;
			break;
		case "Restar":
			$resultado = $nro1 - $nro2;
			$operacion = " - ";
			break;
	}
	
		
	echo $nro1 . $operacion . $nro2 . " = " . $resultado . "<br /><br />";
	echo "<a href='vistaCalculadora.html'>Volver</a>";
} else{	
	header("Location: vistaCalculadora.html");
}
	
	
	

?>