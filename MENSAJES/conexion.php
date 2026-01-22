<?php
// mysqli_connect(host, username, password, dbname, port, socket)

// 1. Credenciales de la base de datos
$servidor   = "localhost";
$usuario    = "root";           // Tu usuario (por defecto en local es 'root')
$password   = "";               // Tu contraseña (por defecto en local suele estar vacía)
$base_datos = "proyecto";  // El nombre de tu base de datos

// 2. Crear la conexión
$conn = mysqli_connect($servidor, $usuario, $password, $base_datos);

// 3. Verificar si hubo errores
if (!$conn) {
    // Si falla, detenemos el script y mostramos el error
    die("La conexión falló: " . mysqli_connect_error());
}

// 4. Establecer el conjunto de caracteres a UTF-8
// Esto es crucial para evitar problemas con tildes y caracteres especiales (ñ)
if (!mysqli_set_charset($conn, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conn));
    exit();
}

// Si llegamos aquí, la conexión es exitosa.
// No se recomienda poner un 'echo' aquí si este archivo será incluido en otros scripts.
?>
</php>
