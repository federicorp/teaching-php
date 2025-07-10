<?php

// Declaracion de una variable entera
$nombreVariable = 10;

// Declaracion de una variable string
$variableString = "Hola Mundo";

// Declaracion de una variable de tipo punto flotante
$variablePuntoFlotante = 3.14;

// Declaracion de una variable booleana
$variableBoolean = true;

// Declaracion de una variable nula
$variableNull = null;

// Declaracion de una variable de tipo array
$variableArray = array(
    "Elemento1",
    "Elemento2",
    "Elemento3"
);

// Declaracion de una variable de tipo array con la sintaxis corta
$variableArray2 = [
    "Elemento1",
    "Elemento2",
    "Elemento3"
];

// Declaracion de una variable de tipo array multidimensional
$variableArray3 = [
    [
        "Elemento1",
        "Elemento2",
        "Elemento3"
    ],
    [
        "Elemento4",
        "Elemento5",
        "Elemento6",
        [
            "SubElemento1",
            "SubElemento2",
            [
                "SubSubElemento1",
                "SubSubElemento2"
            ]
        ]
    ],
    [
        "Elemento4",
        "Elemento5",
        "Elemento6"
    ]
];

// Declaracion de un array asociativo complejo
$arrayComplejo = [
    "nombre" => "Juan",
    "edad" => 30,
    "direccion" => [
        "calle" => "Calle Falsa",
        "numero" => 123,
    ],
    "telefonos" => [
        "casa" => "123456789",
        "movil" => "987654321"
    ],
];


// Imprimir las variables

echo $nombreVariable;
echo "<br>";
echo $variableString;
echo "<br>";
echo $variableArray[0];
echo "<br>";
echo $variableArray3[1][1];
echo "<br>";

// Concatenar variables en una cadena

echo "$arrayComplejo[nombre] tiene $arrayComplejo[edad] años.";

$stringResultante = "$arrayComplejo[nombre] tiene $arrayComplejo[edad] años.";