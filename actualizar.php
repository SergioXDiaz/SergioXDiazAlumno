<?php
//Incluyo la conclusión como siempre
require 'conexion.php';

$mensaje = "";

// --- LÓGICA DE ACTUALIZACIÓN ---

// Compruebo dos cosas: 
//  1.- Que se haya envíado el formulario de "modificar.php" con POST
//  2.- Que se haya pulsado el boton de actualizar, porque sino, no actualizo.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_actualizar'])) {
    // Recogemos los datos (El DNI no se edita, se usa como referencia)
    $dni       = $_POST['dni'];
    $nombre    = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad      = $_POST['edad'];

    // Creamos la cadena con la sentencia del UPDATE
    $sql_update = "UPDATE tabla1 SET nombre='$nombre', apellidos='$apellidos', edad=$edad 
    WHERE DNI='$dni'"; // Super importante el WHERE!!!!!!!!!! siempre buscaré por clave primaría.

    if (mysqli_query($conn, $sql_update)) {
        $mensaje = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ¡Registro de '.$nombre.' actualizado correctamente!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al actualizar: ' . mysqli_error($conn) . '</div>';
    }
}elseif($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_eliminar']) ){

    $dni = $_POST['dni'];

    // Creamos la cadena con la sentencia del DELETE

    $sql_delete = "DELETE FROM tabla1 
    WHERE DNI='$dni'"; // Super importante el WHERE!!!!!!!!!! siempre buscaré por clave primaría.
   
   if (mysqli_query($conn, $sql_delete)) {
        $mensaje = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ¡Registro de '.$dni.' eliminado con exito!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al eliminar: ' . mysqli_error($conn) . '</div>';
    }
}

// --- CONSULTA PARA MOSTRAR LA TABLA ---
$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary">Edición de Datos (Tabla1)</h1>
        
        <?php echo $mensaje; ?>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>DNI (ID)</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th class="text-center">Actualizar</th>
                                <th class="text-center">Eliminar</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($resultado && mysqli_num_rows($resultado) > 0) {
                                while($fila = mysqli_fetch_assoc($resultado)) {
                                    ?>
                                    <tr>
                                        <form action="modificar.php" method="POST" class="d-flex">
                                            <td>
                                                <strong><?php echo $fila['DNI']; ?></strong>
                                                <input type="hidden" name="dni" id="dni" value="<?php echo $fila['DNI']; ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="nombre" class="form-control form-control-sm" value="<?php echo $fila['nombre']; ?>" required>
                                            </td>
                                            <td>
                                                <input type="text" name="apellidos" class="form-control form-control-sm" value="<?php echo $fila['apellidos']; ?>" required>
                                            </td>
                                            <td>
                                                <input type="number" name="edad" class="form-control form-control-sm" style="width: 80px;" value="<?php echo $fila['edad']; ?>" required>
                                            </td>
                                            <td class="text-center">
                                                <button type="submit" name="btn_actualizar" class="btn btn-warning btn-sm shadow-sm">
                                                    Actualizar
                                                </button>
                                            </td>

                                               <td class="text-center">
                                                <button type="submit" name="btn_eliminar" class="btn btn-warning btn-sm shadow-sm">
                                                    Eliminar
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>No hay datos.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="mt-3">
            <a href="insertar.php" class="btn btn-primary">Formulario de Alta</a>
            <a href="mostrar.php" class="btn btn-primary">Mostrar datos</a>
        </div>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>