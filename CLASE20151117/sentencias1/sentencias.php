
<!-- INICIO EJEMPLO DE SUMA DE DOS VALORES INGRESADDOS POR EL USUARIO-->
<H2>Suma de 2 numeros en PHP</H2>
<form action="sentencias.php" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="sumar"> </td>
	</tr>
</table>
</form>
<?php





if($_POST)
	{	
		$num1 = $_POST ['numero1'];
		$num2 = $_POST ['numero2'];
		$suma = $num1 
		+ $num2;
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
		echo '</br>';
	}

?>
<!-- FIN EJEMPLO DE SUMA DE DOS VALORES INGRESADDOS POR EL USUARIO-->


<?php
/*
Comentario de 
varias lineas en php
*/

//comentario de una sola linea en php

/*$sueldo=6000;
if ($sueldo > 6000){
	echo 'Ganas mucha plata </br>';
}else {
	echo 'Hablá con tu jefe';
}
*/

	



///////MOSTRAR variables
printf ("El número 11 en formato flotante con 2 posiciones decimales: %.2f",11);
echo '<br>';
printf("El número 11 sin decimales: %d %c",11,64);

/*
%s
%d
%f 
%c
*/

?>