
<?php
// 1. Incluimos la conexión
require 'conexion.php';

$mensaje = ""; // Variable para mostrar alertas al usuario

// 2. Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos los datos del formulario
    // mysqli_real_escape_string protege contra inyecciones SQL básicas
    $email       = $_POST['email']; // hay que usar el post, ya que hay una password implicada.
    
    $pass = $_POST['pass'];


    // 3. Preparamos la consulta SQL de inserción
    $sql_buscar = "INSERT INTO tabla1 (DNI, nombre, apellidos, edad) 
            VALUES ('$dni', '$nombre', '$apellidos', $edad)";

    // 4. Ejecutamos la consulta y verificamos
    if (mysqli_query($conn, $sql)) {
        $mensaje = '<div class="alert alert-success">¡Registro guardado con éxito!</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al guardar: ' . mysqli_error($conn) . '</div>';
    }
    
    // Cerramos la conexión (opcional aquí, ya que el script termina)
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login INWEB PHP</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Dreccion de E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										El email es invalido, por favor, introduzca uno correcto.
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											¿Olvidó su contraseña?
										</a>
									</label>
									<input id="pass" type="pass" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Contraseña es requerida 
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									¿Aún no tienes contraseña? <a href="register.html"> Crea una</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
