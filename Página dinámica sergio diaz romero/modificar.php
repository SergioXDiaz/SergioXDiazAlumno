<?php
require 'conexion.php';
session_start();



// Si no hay sesión iniciada → redirigir al login
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit;
}

// Si el rol NO es 1 (no es administrador) → redirigir al login o a otra página
if ($_SESSION['rol'] != 1) {
    header("Location: index.php");
    exit;
}
?>
<?php
$mensaje = "";

// --- ACTUALIZAR USUARIO ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_actualizar'])) {

    $id     = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
    $rol    = $_POST['rol'];

    // Si quieres actualizar la contraseña solo si se cambió:
    $sql_update = "UPDATE usuario SET 
                   nombre='$nombre',
                   email='$email',
                   pass='$pass',
                   rol=$rol
                   WHERE id=$id";

    if (mysqli_query($conn, $sql_update)) {
        $mensaje = '<div class="alert alert-success">Usuario actualizado correctamente</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al actualizar: '.mysqli_error($conn).'</div>';
    }

}

// --- ELIMINAR USUARIO ---
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_eliminar'])) {

    $id = $_POST['id'];

    $sql_delete = "DELETE FROM usuario WHERE id=$id";

    if (mysqli_query($conn, $sql_delete)) {
        $mensaje = '<div class="alert alert-success">Usuario eliminado correctamente</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al eliminar: '.mysqli_error($conn).'</div>';
    }
}

// --- CONSULTA PARA MOSTRAR USUARIOS ---
$sql = "SELECT id, nombre, email, pass, rol FROM usuario";
$resultado = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-3">

  <!-- BOTÓN DE LOGOUT alineado a la derecha -->
  <div class="container mt-3">

    <!-- BOTÓN DE LOGOUT -->
  <div class="d-flex justify-content-end gap-2 mb-3">
    <a href="index.php" class="btn btn-secondary">Index</a>
   
    <a href="modificar_peliculas.php" class="btn"  style="background-color:green; color:white">Modificar datos de peliculas </a>
    <a href="modificar_compras.php" class="btn"  style="background-color:blue; color:white">Modificar datos de compra </a>
     <a href="logout.php" class="btn btn-danger" >Cerrar sesión</a>
</div>

<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary">Edición de Usuarios</h1>
    
    <?php echo $mensaje; ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Contraseña (MD5)</th>
                            <th>Rol</th>
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
                                            <strong><?php echo $fila['id']; ?></strong>
                                            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                        </td>
                                        <td>
                                            <input type="text" name="nombre" class="form-control form-control-sm" value="<?php echo $fila['nombre']; ?>" required>
                                        </td>
                                        <td>
                                            <input type="email" name="email" class="form-control form-control-sm" value="<?php echo $fila['email']; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" name="pass" class="form-control form-control-sm" value="<?php echo $fila['pass']; ?>" required>
                                        </td>
                                        <td>
                                            <input type="number" name="rol" class="form-control form-control-sm" style="width: 80px;" value="<?php echo $fila['rol']; ?>" required>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" name="btn_actualizar" class="btn btn-warning btn-sm shadow-sm">Actualizar</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" name="btn_eliminar" class="btn btn-danger btn-sm shadow-sm">Eliminar</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>No hay usuarios.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="mt-3">
        <a href="insertar.php" class="btn btn-primary">Agregar Usuario</a>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </div>
   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
