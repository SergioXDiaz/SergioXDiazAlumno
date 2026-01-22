<?php
require 'conexion.php';
session_start();

// --- VERIFICAR SESIÓN ---
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit;
}

// --- VERIFICAR ROL DE ADMIN ---
if ($_SESSION['rol'] != 1) {
    header("Location: index.php");
    exit;
}

$mensaje = "";

// --- ACTUALIZAR COMPRA (solo pelicula y direccion) ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_actualizar'])) {
    $id        = (int)$_POST['id'];           // ID de la compra
    $pelicula  = mysqli_real_escape_string($conn, $_POST['pelicula']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);

    $sql_update = "UPDATE compras SET 
                   pelicula='$pelicula',
                   direccion='$direccion'
                   WHERE id=$id";

    if (mysqli_query($conn, $sql_update)) {
        $mensaje = '<div class="alert alert-success">Compra actualizada correctamente</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al actualizar: '.mysqli_error($conn).'</div>';
    }
}

// --- ELIMINAR COMPRA ---
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_eliminar'])) {
    $id = (int)$_POST['id'];
    $sql_delete = "DELETE FROM compras WHERE id=$id";

    if (mysqli_query($conn, $sql_delete)) {
        $mensaje = '<div class="alert alert-success">Compra eliminada correctamente</div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al eliminar: '.mysqli_error($conn).'</div>';
    }
}

// --- CONSULTA PARA MOSTRAR COMPRAS ---
$sql = "SELECT c.id, c.id_usuario, u.nombre AS usuario_nombre, c.pelicula, c.direccion, c.fecha 
        FROM compras c 
        JOIN usuario u ON c.id_usuario = u.id
        ORDER BY c.id ASC";
$resultado = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-3">

    <!-- BOTÓN DE LOGOUT -->
  <div class="d-flex justify-content-end gap-2 mb-3">
    <a href="index.php" class="btn btn-secondary">Index</a>
   <a href="modificar_peliculas.php" class="btn btn-secondary">Modificar Peliculas</a>
    <a href="modificar.php" class="btn"  style="background-color:blue; color:white">Modificar datos de los usuarios </a>
     <a href="logout.php" class="btn btn-danger" >Cerrar sesión</a>
</div>


    <h1 class="text-center mb-4 text-primary">Modificar compras</h1>

    <?php echo $mensaje; ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Película</th>
                            <th>Dirección</th>
                            <th>Fecha</th>
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
                                <td><?php echo $fila['id']; ?></td>
                                <td><?php echo $fila['usuario_nombre']; ?></td>

                                <!-- Película editable -->
                                <td>
                                    <form action="modificar_compras.php" method="POST" class="d-flex">
                                        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                        <input type="text" name="pelicula" class="form-control form-control-sm" value="<?php echo htmlspecialchars($fila['pelicula']); ?>" required>
                                </td>

                                <!-- Dirección editable -->
                                <td>
                                        <input type="text" name="direccion" class="form-control form-control-sm" value="<?php echo htmlspecialchars($fila['direccion']); ?>" required>
                                </td>

                                <!-- Fecha no editable -->
                                <td><?php echo $fila['fecha']; ?></td>

                                <!-- Botón Actualizar -->
                                <td class="text-center">
                                        <button type="submit" name="btn_actualizar" class="btn btn-warning btn-sm shadow-sm">Actualizar</button>
                                    </form>
                                </td>

                                <!-- Botón Eliminar -->
                                <td class="text-center">
                                    <form action="modificar_compras.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                        <button type="submit" name="btn_eliminar" class="btn btn-danger btn-sm shadow-sm" onclick="return confirm('¿Deseas eliminar esta compra?');">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No hay compras registradas.</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
