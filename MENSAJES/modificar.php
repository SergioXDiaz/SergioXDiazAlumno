<?php
session_start();
if (isset($_SESSION['rol'])){
    if ($_SESSION)
}
//Incluyo la conclusión como siempre
require 'conexion.php';

$mensaje = "";

// --- LÓGICA DE ACTUALIZACIÓN ---

// Compruebo dos cosas: 
//  1.- Que se haya envíado el formulario de "modificar.php" con POST
//  2.- Que se haya pulsado el boton de actualizar, porque sino, no actualizo.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_actualizar'])) { //iSET ES UNA FUNCINO QUE ESTA EN MEMORIA Y COMPRUEBA QUE ALGO NO ES NULO.
    // Recogemos los datos (El DNI no se edita, se usa como referencia)
    $dni       = $_POST['dni']; //Tiene que tener el mismo name que en el formulario y el id igual.
    $nombre    = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad      = $_POST['edad'];

    // Creamos la cadena con la setencia de dato. Aqui no uso 
    $sql_update = "UPDATE tabla1 SET nombre='$nombre', apellidos='$apellidos', edad=$edad 
    WHERE DNI='$dni'"; // Super importante el WHERE!!!!!!!!!! siempre buscaré por clave primaría.
    //Hacer el where por clave primaria es fundamental para no liar la de dios.

    if (mysqli_query($conn, $sql_update)) { //$con es variable creada de conexion
        $mensaje = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ¡Registro de '.$nombre.' actualizado correctamente!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
    } else {
        $mensaje = '<div class="alert alert-danger">Error al actualizar: ' . mysqli_error($conn) . '</div>';
    } //el dni lo debo recoger del post sino no irá, si puedo llegar a hacer la query bien, lo realizaré, sino no.
}

// --- CONSULTA PARA MOSTRAR LA TABLA --- ¿Porque necesito realizar una consulta? Porque necesito traerme primero todos los datos para que sepa el usuario
// que datos puede modificar.
$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1"; //Tenemos que hacer un select all para que se muestren todos los datos
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
                                <th class="text-center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($resultado && mysqli_num_rows($resultado) > 0) { // si es row, me llevara a 0, no puedo pedirle a una tabla datos que no existen
                                while($fila = mysqli_fetch_assoc($resultado)) {
                                    ?>
                                    <tr>
                                        <form action="modificar.php" method="POST" class="d-flex">
                                            <td>
                                                <strong><?php echo $fila['DNI']; ?></strong>
                                                <input type="hidden" name="dni" value="<?php echo $fila['DNI']; ?>"> <!-- No tiene sentido que dejemos al usuario que toque el dni de una tabla , a no ser que sea un administrador -->
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
                                                    Actualizar
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center'>No hay datos.</td></tr>";
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