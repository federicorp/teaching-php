<?php

// Declaracion de variables
$variable = "Hola Mundo";
$variableEntero = 10;
$array = [
    "Elemento1",
    "Elemento2",
    "Elemento3"
];

// Imprimir una variable con echo
echo $variable;

// Imprimir una variable con var_dump para imprimir recursivamente
var_dump($array);

// Imprimir una variable con print_r para imprimir de forma legible
print_r($array);

echo "<br>";

// Imprimir una variable con var_export para imprimir el valor de la variable que pueda ser copiada y pegada en un codigo PHP
var_export($array);

// Ejemplo de la variable resultante del var_export copiada y pegada en un codigo PHP
$arrayNuevo = array ( 0 => 'Elemento1', 1 => 'Elemento2', 2 => 'Elemento3', );

echo "<br>";

// Imprimir una cadena concatenada con una variable y un elemento de un array
echo "$variable concatenado $array[0]";

echo "<br>";

// Imprimir una cadena con printf
printf("El valor de la variable es: %s y el primer elemento del array es: %s", $variable, $array[0]);
