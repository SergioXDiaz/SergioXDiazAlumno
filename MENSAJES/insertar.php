<?php
// 1. Incluimos la conexión
require 'conexion.php';

$mensaje = ""; // Variable para mostrar alertas al usuario

// 2. Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos los datos del formulario
    // mysqli_real_escape_string protege contra inyecciones SQL básicas
    $dni       = $_POST['dni'];
    $nombre    = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad      = (int)$_POST['edad']; // Forzamos a que sea un número entero

    // 3. Preparamos la consulta SQL de inserción
    $sql = "INSERT INTO tabla1 (DNI, nombre, apellidos, edad) 
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Añadir Nueva Persona</h3>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php echo $mensaje; ?>

                        <form action="insertar.php" method="POST">
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" placeholder="Ej: 12345678Z" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Juan" required>
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ej: Pérez García" required>
                            </div>

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control" placeholder="Ej: 25" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Guardar Registro</button>
                                <a href="mostrar.php" class="btn btn-outline-secondary">Ver Listado</a>
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