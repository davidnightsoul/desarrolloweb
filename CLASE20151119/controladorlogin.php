<?php
//Recibo los valores de las variables y los guardo

$usuario=$_POST["usuario"];

$clave=$_POST ["clave"]; 

//Si no es vacio clave ni usuario

if(!empty($usuario) && !empty($clave)){
	
	//chequeo usuario  
	
	if($usuario=="pepe" && $clave=="1234"){
		
		echo "¡Bienvenido Pepe!";
		
   } else {
   	
   		echo "Usuario o clave incorrectas";
		}	
}else{
	
	echo "No se admiten valores vacíos";
}


?>