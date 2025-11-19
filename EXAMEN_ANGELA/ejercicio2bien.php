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

     if (strlen($dia) == 1){
        $dia = "0" .$dia;
    }

    if (strlen($mes) == 1){
        $mes = "0" .$mes;
    }


    //SNi tenga o no letra quiero pos5, 6 y 7
    $usuario = substr ($nombre, 0,1);
    $dni = substr($dni, 5, 3);
    echo "<br> Dni: " .$dni . "<br>";
    $usuario = $usuario . substr($apellido1, 0, 3);
    $usuario = $usuario . substr($apellido2, 0, 3);
    echo "<br><br> usuario" .$usuario;

    if ((2025 - $ano) >= 18) {
        $usuario = $usuario .$dni;
        
    }
    else {
        $usuario = $usuario .$dia .$mes;
    
    }
    echo "<br><br> usaurio con Dni/fecha: " .$usuario;

    $usuario = $usuario . $terminacion;
    echo "<br><br> Final usuario: " .$usuario;
?>

</body>
</html>