<?php


// Usando funciones en PHP de sistema

var_dump(["Hola", "Mundo"], 1, 2.3, false, null);

// str_contains
if (str_contains("Hola Mundo", "Mundo")) {
    echo "La cadena contiene 'Mundo'";
} else {
    echo "La cadena no contiene 'Mundo'";
}


// Funcion definida por el usuario
function personalizada($texto, $comparacion) {

    if (str_contains($texto, $comparacion)) {
        $cantidadDeLetras = strlen($texto);

        $resultadoPor2 = $cantidadDeLetras * 2;

        if ($resultadoPor2 >= 10) {
            return $resultadoPor2;
        } else {
            return "El resultado es menor a 10";
        }
    }
    return false;
}


echo "<br>";
echo "<br>";

$resultadoDeLaFuncion = personalizada('Mund', 'Mund');


// Comparar si el resultado es distinto de false
if ($resultadoDeLaFuncion !== false) {

    // Para cada tipo de dato que pueda devolver la función se puede hacer una comprobación
    // y actuar en consecuencia
    if (is_string($resultadoDeLaFuncion)) {

        // Si es un string, se puede mostrar directamente
        echo "La función devolvió un mensaje: $resultadoDeLaFuncion";
    } else if (is_int($resultadoDeLaFuncion)) {

        // Si es un entero, se puede mostrar tambien directamente
        echo "La función devolvió un número: $resultadoDeLaFuncion";
    } else {

        // Si es otro tipo de dato, se muestra un error
        echo "La función devolvió un tipo de dato no esperado.";
    }
} else {
    echo "La función no encontró la comparación en el texto.";
}

// Variables global
global $variableGlobal;
$variableGlobal = "Hola desde el espacio global";

function parametrosTipados(int $numero, string $texto = '', bool $booleano = true) {

    // imprimiendo la variable global
    global $variableGlobal;
    echo "Variable global: $variableGlobal<br>";

    echo "El número es: $numero<br>";
    echo "El texto es: $texto<br>";
    echo "El booleano es: " . ($booleano ? 'verdadero' : 'falso') . "<br>";
}


echo "<br>";
echo "<br>";

// Llamando a la función con parámetros tipados
parametrosTipados(12, "Hola Mundo", true);

// Llamando a la función con parámetros tipados, omitiendo el texto y pasando el booleano como false
parametrosTipados("12", booleano: false);


// Declarando una variable externa a la funcion
$variableExterna = "Hola desde el exterior";

// Funcion anonima
$funcionAnonima = function($texto) {

    // Intentando acceder a una variable externa sin el uso de 'use', da un error
    // Descomentar la siguiente línea para ver el error
//    echo "Variable externa: $variableExterna<br>";

    return strtoupper($texto);
};

echo "<br>";
echo "<br>";

// Llamando a la función anonima cargada en la variable $funcionAnonima
echo $funcionAnonima("Hola Mundo");


// Funcion anonima con uso de 'use' para acceder a una variable externa
// Que retorna otra funcion anonima
$funcionAnonima1 = function($texto) {

    $texto .= "Agrego mas texto dentro de la primera funcion anonima";

    return function() use ($texto) {

        return strtoupper($texto);

    };
};

echo "<br>";
echo "<br>";

// Llamando a la función anonima cargada en la variable $funcionAnonima1 y cargando el resultado en $funcionAnonima2
$funcionAnonima2 = $funcionAnonima1("Hola Mundo Dentro de otra funcion");

// Llamando a la función anonima cargada en la variable $funcionAnonima2
echo $funcionAnonima2();


// Ejemplo de función que calcula el área de un rectángulo y recibe un callback opcional
function calcularArea($base, $altura, $callback = null) {

    $area = $base * $altura;

    // Si se pasa un callback, se ejecuta con el área calculada
    if (is_callable($callback)) {
        return $callback($area);
    }

    return $area;

}


// Forma de llamar a la función calcularArea pasando un callback
calcularArea(2, 10, function($area) {

    echo "<br><br>El área es: $area";

});