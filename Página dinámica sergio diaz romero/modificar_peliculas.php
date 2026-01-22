<?php
require 'conexion.php';
session_start();

// SOLO ADMIN
if (!isset($_SESSION['id_usuario']) || $_SESSION['rol'] != 1) {
    header("Location: index.php");
    exit;
}

// ELIMINAR
if (isset($_POST['eliminar'])) {
    $id = (int)$_POST['id'];
    mysqli_query($conn, "DELETE FROM peliculas WHERE id=$id");
}
//Las variables de peliculas vienen definidas en la parte de modificar peliculas
// INSERTAR (Comprueba que se ha enviado el formulario, pulsando un botón llamado "agregar")
if (isset($_POST['agregar'])) { 
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']); //Limpiar los datos recibidos del formulario
    $genero = mysqli_real_escape_string($conn, $_POST['genero']);
    $imagen = mysqli_real_escape_string($conn, $_POST['imagen']);
//Esto sirve para insertar datos en la base de datos
    mysqli_query($conn, "INSERT INTO peliculas (titulo, genero, imagen)
                         VALUES ('$titulo','$genero','$imagen')");
}

$peliculas = mysqli_query($conn, "SELECT * FROM peliculas ORDER BY id DESC");
//Ejecuta una consulta usando la conexion, luego ejecuta la consulta.
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Gestionar Películas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-3">

    <!-- BARRA SUPERIOR -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">🎬 Gestión de Películas</h2>

        <div class="d-flex gap-2">
            <a href="index.php" class="btn btn-secondary text-white">🏠 Index</a>
            <a href="modificar.php" class="btn btn-success text-white">👤 Usuarios</a>
            <a href="modificar_compras.php" class="btn btn-primary text-white">🛒 Compras</a>
            <a href="logout.php" class="btn btn-danger text-white">🔒 Cerrar sesión</a>
        </div>
    </div>

    <!-- FORMULARIO AGREGAR -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="mb-3">➕ Agregar nueva película</h5>

            <form method="POST">
                <input type="text" name="titulo" placeholder="Título"
                       required class="form-control mb-2">

                <input type="text" name="genero" placeholder="Género"
                       required class="form-control mb-2">

                <input type="text" name="imagen" placeholder="URL de la imagen"
                       required class="form-control mb-2">

                <button name="agregar" class="btn btn-success text-white">
                    Agregar película
                </button>
            </form>
        </div>
    </div>

    <!-- TABLA PELÍCULAS -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Género</th>
                        <th class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($peliculas && mysqli_num_rows($peliculas) > 0) {
                    while ($p = mysqli_fetch_assoc($peliculas)) { ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= htmlspecialchars($p['titulo']) ?></td>
                            <td><?= htmlspecialchars($p['genero']) ?></td>
                            <td class="text-center">
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                    <button name="eliminar"
                                            class="btn btn-danger btn-sm text-white"
                                            onclick="return confirm('¿Eliminar esta película?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                <?php }
                } else { ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            No hay películas registradas
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
