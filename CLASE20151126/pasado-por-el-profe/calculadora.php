<?php
$nro1 = $_POST["txtNro1"];
$nro2 = $_POST["txtNro2"];
	
if(!empty($nro1) && !empty($nro2)){
	$valBtn = $_POST["btn"];
	$nro1 = intval($nro1);
	$nro2 = $nro2 + 0;
	
	$operacion = " + ";
	switch($valBtn){
		case "Sumar":
			$resultado = $nro1 + $nro2;	
			break;
		case "Multiplicar":
			$resultado = $nro1 * $nro2;
			$operacion = " * ";
			break;
	}
	
		
	echo $nro1 . $operacion . $nro2 . " = " . $resultado . "<br /><br />";
	echo "<a href='vistaCalculadora.html'>Volver</a>";
} else{	
	header("Location: vistaCalculadora.html");
}
	
	
	

?>