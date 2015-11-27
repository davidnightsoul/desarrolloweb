<?php
echo '<b>El siguiente ejercicio muestra el uso de la sentencia switch.</b> <br /><br />';


$color = "amarillo";
	
$msj = "La variable tiene el valor: ";
	
switch($color){
	case "rojo":
		echo $msj . $color;
		break;
		
	case "azul":
		echo $msj . $color;
		break;
			
	case "verde":
		echo $msj . $color;
		break;
		
	default:
		echo "Ningun valor coincide";
		break;
}
	
	
	



?>