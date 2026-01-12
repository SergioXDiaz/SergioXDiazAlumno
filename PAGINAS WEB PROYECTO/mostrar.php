<?php
// 1. Incluimos el archivo de conexión
// Asegúrate de que en 'conexion.php' la variable $base_datos sea: $base_datos = "Nombre de tu BBDD";
require 'conexion.php';

// 2. Preparamos la consulta SQL
// Seleccionamos específicamente las columnas que pediste
$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1";

// Ejemplo con filtro en la búsqueda:
/*$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1
WHERE nombre like 'A%'";*/

// 3. Ejecutamos la consulta
$resultado = mysqli_query($conn, $sql); //Devuelve un objeto

//Verificamos si la consulta se ejecutó correctamente
// Si ha habido un error en la consulta (por error en tabla, columna)
// Devuelve false (!false  es lo mismo que true), entra en el if
/*if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conn));
} //Sino, significa que todo ha ido bien.
else {
    //Si el número de filas del objeto resultado es mayor a 0,
    //es porque la consulta de la variable $sql ha sido exitosa.
    // En ese caso tendrá al menos una fila.
    if(mysqli_num_rows($resultado) > 0){
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "El nombre de la alumn@ es: ".$fila["nombre"]."<br>";
            echo "Apellidos: ".$fila["apellidos"]."<br>";
            echo "DNI: ".$fila["DNI"]."<br>";
            echo "Edad: ".$fila["edad"]."<br>";
        }
    }
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        
        <h1 class="text-center mb-4 text-primary">Listado de Datos de Tabla1</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Verificación de error
                            if (!$resultado) {
                                // Si falla, cerramos la tabla y mostramos una alerta roja de Bootstrap
                                echo '</tbody></table></div></div></div>';
                                echo '<div class="alert alert-danger mt-3" role="alert">';
                                echo 'Error en la consulta: ' . mysqli_error($conn);
                                echo '</div>';
                                die(); // Detenemos el script
                            } 
                            
                            // Si todo va bien y hay filas
                            elseif (mysqli_num_rows($resultado) > 0) {
                                while($fila = mysqli_fetch_assoc($resultado)) {
                                    echo "<tr>";
                                    echo "<td>" . $fila['DNI'] . "</td>";
                                    echo "<td>" . $fila['nombre'] . "</td>";
                                    echo "<td>" . $fila['apellidos'] . "</td>";
                                    // Badge para la edad (opcional, visualmente agradable)
                                    echo "<td>". $fila['edad'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                // Si no hay datos, mostramos mensaje centrado
                                echo "<tr><td colspan='4' class='text-center text-muted p-4'>No hay registros encontrados.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div> </div>
        </div>

    </div> 
     <?php
    // 7. Liberar memoria del resultado (opcional en scripts pequeños, pero buena práctica)
    mysqli_free_result($resultado);

    // 8. Cerrar la conexión
    mysqli_close($conn);
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

   
</body>
</html>





