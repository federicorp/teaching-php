<?php

$variable = "Hola Mundo";
$variableEntero = 10;
$array = [
    "Elemento1",
    "Elemento2",
    "Elemento3"
];

echo $variable;
var_dump($array);
print_r($array);

echo "<br>";
var_export($array);

$arrayNuevo = array ( 0 => 'Elemento1', 1 => 'Elemento2', 2 => 'Elemento3', );

echo "<br>";

echo "$variable concatenado $array[0]";

echo "<br>";

printf("El valor de la variable es: %s y el primer elemento del array es: %s", $variable, $array[0]);
