<?php


$array = [
    "Elemento1",
    "Elemento2",
    "Elemento3"
];

$var11 = $array[0];
$var22 = $array[1];
$var33 = $array[2];

// haciendo list
list($var1, $var2, $var3) = $array;


var_dump($var1, $var2, $var3);


// Rellenar un array con valores del 1 al 10
$arrayRellenado = range(1, 10);

echo "<br>";
echo "<br>";

var_dump($arrayRellenado);

echo "<br>";
echo "<br>";

// Usar count para saber la cantidad de elementos en el array
echo "Cantidad de elementos en el array: " . count($arrayRellenado) . "<br>";

// Ver si hay un elemento especifico en el array
if (in_array(15, $arrayRellenado)) {
    echo "El número 15 está en el array.<br>";
} else {
    echo "El número 15 no está en el array.<br>";
}

// Eliminar un elemento del array
unset($arrayRellenado[5]);

echo "<br>";
echo "<br>";

echo "Array después de eliminar el elemento en la posición 5:<br>";

var_dump($arrayRellenado);

// iterar con un for el array (Esto da error porque el array tiene huecos)
for ($i = 0; $i < count($arrayRellenado); $i++) {
    echo "Elemento en la posición $i: " . $arrayRellenado[$i] . "<br>";
}

echo "<br>";
echo "<br>";

// Mejor forma de iterar con un foreach
foreach ($arrayRellenado as $indice => $valor) {
    echo "Elemento en la posición $indice: $valor<br>";
}