<?php

$variable = "Hola Mundo";

if ($variable == "Hola Mundo") {
    echo "La variable es igual a 'Hola Mundo'";
} else if ($variable === "Hola Mundo") {
    echo "La variable es idéntica a 'Hola Mundo'";
} else if ($variable === "Hola Mundo") {
    echo "La variable es idéntica a 'Hola Mundo'";
} else {
    echo "La variable no es igual a 'Hola Mundo'";
}


$numero = 10;


$resultado = ($numero == 10 ? $numero + 5 : $numero - 2);

// Esto es lo mismo que:
if ($numero == 10) {
    $resultado = $numero + 5;
} else {
    $resultado = $numero - 2;
}

echo "<br>";
echo "<br>";

$valor = 50;
switch ($valor) {
    case 10:
        echo "El valor es 10";
        break;
    case 20:
        echo "El valor es 20";
        break;
    case 30:
        echo "El valor es 30";
        break;
    case 40:
        echo "El valor es 40";
        break;
    case 50:
        echo "El valor es 50";
        break;
    default:
        echo "El valor no coincide con ningún caso";
        break;
}

echo "<br>";
echo "<br>";

echo match($valor) {
    10 => "El valor es 10",
    20 => "El valor es 20",
    30 => "El valor es 30",
    40 => "El valor es 40",
    50 => "El valor es 50",
    default => "El valor no coincide con ningún caso"
};