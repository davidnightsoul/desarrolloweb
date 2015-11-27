<?php

$usuario = $_POST["usuario"];

$clave = $_POST["clave"];

if(!empty($usuario) && !empty($clave)){
	if($usuario == "pepe" && $clave == "1234"){
		//echo "Bienvenido pepe";
		header("Location: vistaCalculadora.html");
	} else {
		echo "Usuario o clave incorrecta";
	}
}



?>