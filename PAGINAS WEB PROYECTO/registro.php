<?php
require 'conexion.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];

    $sql_registro = "INSERT INTO usuario (nombre, email, pass, rol) 
                     VALUES('$nombre', '$email', MD5('$pass'), 1)";

    if (mysqli_query($conn, $sql_registro)) {
        $mensaje = '<div class="alert alert-success">¡Usuario registrado con éxito!</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al guardar: ' . mysqli_error($conn) . '</div>';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/my-login.css">
</head>

<body class="my-login-page">
<section class="min-vh-100 d-flex align-items-center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">

				<div class="text-center mb-4">
					<img src="img/logo.jpg" alt="Logo" class="img-fluid">
				</div>

				<div class="card shadow">
					<div class="card-body">

						<h4 class="card-title text-center mb-4">Registro</h4>

						<?= $mensaje ?>

						<form action="registro.php" method="POST" novalidate>

							<div class="mb-3">
								<label for="nombre" class="form-label">Nombre</label>
								<input id="nombre" type="text" class="form-control" name="nombre" required autofocus>
								<div class="invalid-feedback">
									Indica tu nombre
								</div>
							</div>

							<div class="mb-3">
								<label for="email" class="form-label">E-Mail</label>
								<input id="email" type="email" class="form-control" name="email" required>
								<div class="invalid-feedback">
									Tu email es inválido.
								</div>
							</div>

							<div class="mb-3">
								<label for="pass" class="form-label">Password</label>
								<input id="pass" type="password" class="form-control" name="pass" required>
								<div class="invalid-feedback">
									La contraseña es obligatoria.
								</div>
							</div>

							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="agree" required>
								<label class="form-check-label" for="agree">
									Estoy de acuerdo con los <a href="#">términos y condiciones</a>
								</label>
								<div class="invalid-feedback">
									Debe aceptar los términos y condiciones.
								</div>
							</div>

							<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>

							<div class="mt-4 text-center">
								¿Ya tienes una cuenta? <a href="index.html">Login</a>
							</div>

						</form>
					</div>
				</div>

				<div class="text-center mt-3 text-muted">
					Copyright © 2015 — IMWEB/PHP
				</div>

			</div>
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/my-login.js"></script>
</body>
</html>
