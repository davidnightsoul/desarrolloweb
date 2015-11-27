<?php

//Un array o arreglo unidemensional 
$nombre = "Agustin"; 
$array = array(1, 2, 3, "casa", $nombre);


for($i = 0; $i <count($array) ; $i++){
	echo $array[$i] . "<br/>";
}

//Añadiendo un nuevo elemento
$array[] = "Elemento nuevo";
//también vale usar  array_push
array_push($array, 34);

for($i = 0; $i <count($array) ; $i++){
	echo $array[$i] . "<br/>";
}

//Forma de quitar el ultimo elemento de un array
array_pop($array);

print_r($array);
echo "<br/>";

unset($array[2]);
print_r($array);

$equipo = array("arquero"=>"Romero", "defensor"=>"Otamendi", "medio"=>"Mascherano", "delantero"=>"Messi");

foreach($equipo as $posicion=>$jugador){
	echo "<br/>En la posici&oacute;n de " . $posicion . " juega " . $jugador . "<br/>";
}


echo "De arquero juega: " . $equipo["arquero"] . "<br/>";


//Array o arreglo bidimensional o "Matriz"

$matriz = array(
	array(10, 20, 5),
	array(34, 56, 12),
	array(23, 112)
);

//Sirve para ver el contenido y estructura de una variable (en este caso de la matriz)
//var_dump($matriz);
var_export($matriz);

$pilotos=array(
  "Ferrari"=>array("Alonso","Kimi"),
  "Mercedes"=>array("Hamilton","Rosberg")
);
 
echo "Número de pilotos, contando de manera no recursiva: " . count($pilotos) . "<br/>";
echo "Número de pilotos, contando de manera recursiva: " . count($pilotos, 1) . "<br/>";


//PHP implode(): Convierte un array en una cadena de texto
$array_equipo = array('portero', 'laterales', 'centrales', 'mediocentros', 'interiores', 'delanteros');
 
$cadena_equipo = implode(";", $array_equipo);
echo "<br>El equipo separaro por ';' es el siguiente: " .$cadena_equipo;
 
$cadena_equipo2 = implode($array_equipo);
echo "<br><br>El equipo sin parámetro string es el siguiente: " .$cadena_equipo2;

//PHP explode(): Convierte un string en array
$cadena = "uno,dos,tres,cuatro,cinco";
$array = explode(",", $cadena);
echo "<br><br>El número de elementos en el array es: " . count($array);



//Ordenar arrays con PHP sort(), asort() y ksort()
?>