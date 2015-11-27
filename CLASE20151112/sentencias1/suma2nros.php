<?php
//se usa la funcion rand(inicio intervalo, fin intervalo)
$numa=rand(5,500);
$numb=rand(5,500);
$resultado = $numa + $numb ;
echo "La suma entre $numa y $numb:  $resultado" ;
echo "<br> Número máximo de rand()" . getrandmax();
echo '<br>';
//usar print para sumar hasta flotantes
echo "La suma entre ".$numa.", ".$numb. " y " . '10.5' . ": ";
print $numa + $numb + 10.5;

echo("<br>");
///comparamos los dos valores 
if ($numa>$numb){
echo "$numa es mayor que $numb"	;
}
elseif ($numa< $numb){
	echo "$numa es menor que $numb";
}else {
	echo "$numa es igual que $numb";
}

?>