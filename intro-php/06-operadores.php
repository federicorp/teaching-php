<?php


// Operador de asignación
$variable = "Hola Mundo";

// Operador unario
$numero = 10;
$numeroUnario = -$numero; // Negación


// Imprimir resultados
echo $numero;
echo "<br>";
echo $numeroUnario;
echo "<br>";
echo "<br>";

// Operadores aritméticos
$suma = 5 + 3; // Suma
$resta = 10 - 5; // Resta
$multiplicacion = 4 * 8; // Multiplicación
$division = 20 / 4; // División
$modulo = 10 % 3; // Módulo (resto de la división)
$exponente = 2 ** 5; // Exponente (2 elevado a la 5)

// Imprimir resultados
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "Multiplicación: $multiplicacion<br>";
echo "División: $division<br>";
echo "Módulo: $modulo<br>";
echo "Exponente: $exponente<br>";

// Operadores de comparación
$igual = 5 == 5; // Igualdad
$diferente = 5 != 3; // Diferencia
$mayorQue = 10 > 5; // Mayor que
$menorQue = 3 < 7; // Menor que
$mayorIgual = 5 >= 5; // Mayor o igual que
$menorIgual = 3 <= 4; // Menor o igual que


// Caso de falso positivo y como evitarlo
$valorFalso = false;
$valorFalsoPositivo = 0;

// Falso positivo: Comparar un valor falso con 0
if ($valorFalso == $valorFalsoPositivo) {
    echo "Los valores son iguales<br>";
} else {
    echo "Los valores son diferentes<br>";
}

// Comparación estricta (tipo y valor)
if ($valorFalso === $valorFalsoPositivo) {
    echo "Los valores son estrictamente iguales<br>";
} else {
    echo "Los valores son estrictamente diferentes<br>";
}


// Operadores de asignación compuesta
$numero += 5; // Equivalente a $numero = $numero + 5
$numero = $numero + 5; // Otra forma de escribirlo
$numero -= 3; // Equivalente a $numero = $numero - 3
$numero *= 2; // Equivalente a $numero = $numero * 2
$numero /= 4; // Equivalente a $numero = $numero / 4
$numero %= 3; // Equivalente a $numero = $numero % 3
$numero **= 2; // Equivalente a $numero = $numero ** 2

$numero++; // Incremento (equivalente a $numero = $numero + 1)
$numero--; // Decremento (equivalente a $numero = $numero - 1)
