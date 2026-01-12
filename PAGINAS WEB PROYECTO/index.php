<?php
require 'conexion.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    $sql = "SELECT * FROM usuario 
            WHERE email = '$email' 
            AND pass = MD5('$pass')";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        // Usuario válido
        session_start();
        $usuario = mysqli_fetch_assoc($resultado);

        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['nombre']     = $usuario['nombre'];
        $_SESSION['rol']        = $usuario['rol'];

		// Admin o usuario/s normales
		if ($_SESSION['rol'] == 1){
        	header("Location: modificar.php"); // cambia a tu página principal
			exit;
		}
		else{
			header("Location: mostrar.php");
			exit;
		}
			
    } else {
        $mensaje = '<div class="alert alert-danger text-center">
                        Email o contraseña incorrectos
                    </div>';
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login IMWEB/PHP</title>

	<!-- Bootstrap 5 -->
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
						<h4 class="card-title text-center mb-4">Login</h4>

						<?= $mensaje ?>

						<form action="index.php" method="POST" novalidate>

							<div class="mb-3">
								<label for="email" class="form-label">E-Mail</label>
								<input id="email" type="email" class="form-control" name="email" required autofocus>
								<div class="invalid-feedback">
									Email inválido
								</div>
							</div>

							<div class="mb-3">
								<label for="pass" class="form-label">
									Password
									<a href="forgot.html" class="float-end">
										¿Olvidó su password?
									</a>
								</label>
								<input id="pass" type="password" class="form-control" name="pass" required>
								<div class="invalid-feedback">
									La contraseña es obligatoria
								</div>
							</div>

							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="remember">
								<label class="form-check-label" for="remember">
									Recordarme
								</label>
							</div>

							<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Login
								</button>
							</div>

							<div class="mt-4 text-center">
								¿Aún no tienes una cuenta? <a href="registro.php">Crea una</a>
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
