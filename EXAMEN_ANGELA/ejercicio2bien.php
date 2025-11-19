<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $terminacion = "@luisvelez.org";
    $nombre = "    Carlos";
    $apellidos = " Gardel De la Rosa";
    $dni ="17485659R";
    $fecha_nacimiento = "02/02/2003";
    $edad = 21;

    echo "Original: " .$nombre . " " .$apellidos . "<br><br>";
    $nombre = trim($nombre);
    $apellidos = trim($apellidos);

    //1- pasarlo a minuscula
    $nombre = strtolower($nombre);

    // respecto a los apellidos
    $apellidos = str_replace("De la", "dela", $apellidos);

    $apellidos = strtolower($apellidos);

    echo "Nombre: $nombre Apellidos: $apellidos";

    $apel = explode(" ", $apellidos);
    $apellido1 = $apel[0];
    $numApellidos = count($apel);

    switch ($numApellidos){
        case 1:
            $apellido2 = "xxx";
            break;
        case 2:
            $apellido2 = $apel[1];
            break;
        default:
        $apellido2 = $apel[$numApellidos - 1];
    }

    echo "Apellido 1: $apellido1  Apellido 2 $apellido2";
    //fechas
    $f = explode("/", $fecha_nacimiento);
    $dia = $f[0];
    $mes = $f[1];
    $ano = $f[2];

    if (strlen($mes) == 1){
        $mes = "0" .$mes;
    }
    

?>

</body>
</html>