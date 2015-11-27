<?php

echo '<b>El siguiente ejercicio muestra el uso de la sentencia switch convinada con if.</b> <br /><br />';

$color = "azul";
	
switch($color){
	case "rojo":
		echo $color . "<br/>";
		break;
		
	case "azul":
		echo $color . "<br/>";
		break;
			
	case "verde":
		echo $color;
		break;
		
	default:
		echo "Ningun valor coincide";
		break;
}




?>