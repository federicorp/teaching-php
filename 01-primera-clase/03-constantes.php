<?php

// Definición de una constante en PHP
define("PI", 3.14159265358979323846);

// Declaración de una constante con un nombre descriptivo
define("NOMBRE", "Juan Perez");

// Definición de una constante para la configuración de conexión a MySQL
define("MYSQL_CONFIG", [
    "host" => "localhost",
    "user" => "root",
    "password" => "password",
    "database" => "mi_base_de_datos"
]);

// Imprimiendo el valor de una constante
echo "El valor de PI es: " . PI . "<br>";
echo "El nombre es: " . NOMBRE . "<br>";




// Definición de constantes para el estado de un documento
define("DOCUMENTO_CREADO", 1);
define("DOCUMENTO_CON_ERROR", 2);

$resultado = 1; // Simulando un resultado de operación

if ($resultado == DOCUMENTO_CREADO) {
    echo "Se creo el documento correctamente<br>";
} else {
    echo "No se pudo crear el documento<br>";
}



// Usando constantes de sistema
echo "El directorio actual es: " . __DIR__ . "<br>";

// Usando constantes de PHP
echo "La versión de PHP es: " . PHP_VERSION . "<br>";

// Version de OS
echo "El sistema operativo es: " . PHP_OS . "<br>";