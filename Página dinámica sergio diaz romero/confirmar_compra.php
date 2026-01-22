<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_usuario'])) {
    die("NO_LOGIN");
}

if (!isset($_POST['peliculas'], $_POST['direccion'])) {
    die("DATOS INCOMPLETOS");
}

$id_usuario = (int) $_SESSION['id_usuario'];
$direccion = trim($_POST['direccion']);
$peliculas = $_POST['peliculas'];

if ($direccion === "" || !is_array($peliculas)) {
    die("DATOS INCORRECTOS");
}

$sql = "INSERT INTO compras (id_usuario, pelicula, direccion)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("ERROR PREPARE");
}

foreach ($peliculas as $pelicula) {
    mysqli_stmt_bind_param($stmt, "iss", $id_usuario, $pelicula, $direccion);
    mysqli_stmt_execute($stmt);
}

echo "Tu compra se ha realizado correctamente, en 3 días te recibirás tu producto.";
?>