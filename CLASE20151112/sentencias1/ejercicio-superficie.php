<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	<head>
		<title>Superficie de un tri�ngulo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /><!--UTF-8 -->
		<meta name="keywords" content="curso, programaci�n, php, superficie triangulo">
		<meta name="description" content="Curso de Programaci�n web Oficina de empleo"/>
		<meta name="author" content="David">

	
		
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<H2>Superficie de triangulo</H2>
		<form action="ejercicio-superficie.php" method="POST">
			<table>
				<tr>
					<td>
						<label for="base">Base del Tri�ngulo</label>
						<input type="text" name="base">
			
					</td>
				</tr>
				<tr>
					<td> <input type="submit" value="Sacar superficie"></td>
				</tr>
			</table>
		</form>

		<?php

		echo("<b>Calcular el area de un tri�ngulo, conociendo la base y sabiendo que su altura es igual al cuadrado de la base (Observar que la altura no es dato.  s�lo se indica la forma de calcularla de acuerdo a la base que s� es un dato)</b>");
		if($_POST){	
			$num1 = 
			$base = $_POST ['base'];
			$altura = pow($base,2);
			$superficie = ($base*$altura)/2;

			echo("</br></br> El tri�ngulo tiene de base: $base altura: $altura y su superficie es: $superficie");
		}else{
	

			$base = rand(1,100);
			$altura = pow($base,2);
			$superficie = ($base*$altura)/2;
			echo("</br>Valor de base random entre 1 y 100</br> El tri�ngulo tiene de base: $base altura: $altura y su superficie es: $superficie");
		}
		?>


	</body>
</html>