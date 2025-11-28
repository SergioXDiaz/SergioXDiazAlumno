<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //(ej: Sistema de gestión de base de datos).
    // Ignora palabras de 2 caracteres
    // La salida debe ser en mayúsculas
    $frase_acronimo = "Sistema de Gestión de Base de Datos Abiertos";
    $palabras = explode(" ", $frase_acronimo);
    $acronimo = "";

    foreach ($palabras as $palabra) {
        //Limpiar y comprobar longitud
    $palabra_limpia = trim($palabra);
    if (strlen($palabra_limpia) > 2){
        // Tomar la primera letra y añadirla
        $acronimo .= strtoupper($palabra_limpia);
        $acronimo = concat($acronimo, $palabra_limpia);
    }
    }

    echo "25. Frase: $frase_acronimo. \n";
    echo "  Acrónimo generado: $acronimo.\n";
    ?>
</body>
</html>