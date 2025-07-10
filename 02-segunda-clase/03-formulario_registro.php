<?php

// Solo si se recibe el formulario via POST se hace la logica de registro
// Si no, salta este IF y se muestra el formulario mas abajo
if (count($_POST) > 0) {
    var_dump($_POST);

    // Recogemos los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';
    $repeatContrasena = $_POST['repeatContrasena'] ?? '';


    // Validar que las contraseñas coincidan
    if ($contrasena !== $repeatContrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Validar que el email tenga un formato correcto
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es válido.";
        exit;
    }

    // Validar que el nombre no esté vacío
    if (empty($nombre)) {
        echo "El nombre no puede estar vacío.";
        exit;
    }

    // Datos recibidos del formulario directo a un string $datos
    $datos = "Nombre: $nombre, Email: $email, Contraseña: $contrasena, repeatContraseña: $repeatContrasena\n";

    // Guardamos los datos en un archivo

    // Forma antigua (no recomendada)
//    $file = fopen(__DIR__ . "/registro.txt", "a+");
//    fwrite($file, $datos);
//    fclose($file);

    // Forma simple
    file_put_contents(__DIR__ . "/registro.txt", $datos, FILE_APPEND);


    // Ejemplo para insertar en una base de datos los datos

    // Conexión a la base de datos de forma procedural
    $conn = mysqli_connect("localhost", "root", "", "teaching");

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error al insertar los datos: " . mysqli_error($conn);
        exit;
    }

    mysqli_close($conn);

    // Conexión a la base de datos de forma orientada a objetos (POO)
    $mysqliPoo = new mysqli("localhost", "root", "", "teaching");

    if ($mysqliPoo->query($sql)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: " . $mysqliPoo->error;
        exit;
    }
    $mysqliPoo->close();

    echo "Registro exitoso. Los datos se han guardado correctamente.";

    exit;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
</head>
<body>

<h1>Formulario de Registro</h1>
<form action="03-formulario_registro.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br><br>

    <label for="repeatContrasena">Repite la Contraseña:</label>
    <input type="password" id="repeatContrasena" name="repeatContrasena" required><br><br>

    <button type="submit">Registrar</button>
</form>

</body>
</html>
