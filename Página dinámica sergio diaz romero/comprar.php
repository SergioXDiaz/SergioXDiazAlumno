<?php
session_start();
require 'conexion.php';

header('Content-Type: application/json');

if(!isset($_SESSION['id_usuario'])) {
    echo json_encode(['success'=>false, 'message'=>'No has iniciado sesión']);
    exit;
}

// Recibir datos JSON
$input = json_decode(file_get_contents('php://input'), true);
$peliculas = $input['peliculas'] ?? [];
$direccion = $input['direccion'] ?? '';

if(empty($peliculas) || empty($direccion)) {
    echo json_encode(['success'=>false, 'message'=>'Datos incompletos']);
    exit;
}

// Preparar SQL
$stmt = $conn->prepare("INSERT INTO compras (id_usuario, pelicula, direccion) VALUES (?, ?, ?)");

foreach($peliculas as $p) {
    $stmt->bind_param("iss", $_SESSION['id_usuario'], $p, $direccion);
    $stmt->execute();
}

$stmt->close();
$conn->close();

echo json_encode(['success'=>true]);
?>
