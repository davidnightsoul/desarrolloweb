<?php
  $usuario=$_POST["usuario"];
  $clave=$_POST["clave"];
  
 // echo $usuario . " " . $clave;
  if(!empty($usuario) && !empty($clave)){
  	if($usuario=="pepe" && $clave=="1234"){
	  	echo "
	  	header("location: switch.php"); 
	  } else {
	  	echo "usuario contraseña encorrecta";
	  }
  }


?>