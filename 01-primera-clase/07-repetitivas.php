<?php


$array = [
    "Elemento1",
    "Elemento2",
    "Elemento3"
];


// Repetitivas con while
$contador = 0;
while ($contador < 3) {
    echo $array[$contador] . "<br>";
    $contador++;
}

// Repetitivas con do while
$contador = 0;
do {
    echo $array[$contador] . "<br>";
    $contador++;
} while ($contador < 3);

// Repetitivas con for
for ($i = 0; $i < 3; $i++) {
    echo $array[$i] . "<br>";
}

echo "<br>";


$arrayComplejo = [
    "nombre" => "Juan",
    "edad" => 30,
    "direccion" => [
        "calle" => "Calle Falsa",
        "numero" => 123,
    ],
];

// Repetitivas con foreach
foreach ($arrayComplejo as $indice => $valor) {
    if ($indice === "edad") {
        echo "La edad es: $valor <br>";
    } else if ($indice === "nombre") {
        echo "El nombre es: $valor <br>";
    } else if ($indice === "direccion") {
        echo "La dirección es: <br>";
        foreach ($valor as $subIndice => $subValor) {
            echo "$subIndice: $subValor <br>";
        }
    } else {
        echo "No se reconoce el índice: $indice <br>";
    }
}

echo "<br>";

// Break y continue
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        echo "Se ha alcanzado el valor 5, se interrumpe el bucle.<br>";
        break; // Interrumpe el bucle
    }
    echo "Valor actual: $i <br>";
}

echo "<br>";
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue; // Salta al siguiente valor
    }

    $multiplo = $i * 2;
    $divisible = $multiplo % 3 === 0 ? "es divisible por 3" : "no es divisible por 3";

    echo "Valor impar: $i <br>";
}