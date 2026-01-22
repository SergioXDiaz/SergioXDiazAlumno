<?php
require 'conexion.php';

$mensaje = "";

// 1. Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Recoger datos
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $pass   = mysqli_real_escape_string($conn, $_POST['pass']);
    $rol    = isset($_POST['rol']) ? (int)$_POST['rol'] : 0; // 0 usuario normal, 1 admin

    // 3. Convertir password a MD5 (igual que tu dump)
    $pass_md5 = md5($pass);

    // 4. Preparar consulta
    $sql = "INSERT INTO usuario (nombre, email, pass, rol) 
            VALUES ('$nombre', '$email', '$pass_md5', $rol)";

    // 5. Ejecutar e informar
    if (mysqli_query($conn, $sql)) {
        $mensaje = '<div class="alert alert-success">¡Usuario registrado con éxito!</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar Usuario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Registrar Nuevo Usuario</h3>
                </div>
                <div class="card-body p-4">

                    <?= $mensaje ?>

                    <form action="insertar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Juan" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ej: correo@dominio.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="********" required>
                        </div>

                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <select name="rol" id="rol" class="form-select">
                                <option value="0" selected>Usuario</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Registrar Usuario</button>
                            <a href="modificar.php" class="btn btn-outline-secondary">Volver al Inicio</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
