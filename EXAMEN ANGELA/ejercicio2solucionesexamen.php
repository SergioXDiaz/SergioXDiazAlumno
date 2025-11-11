<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    Echo "Generador de usuarios para la intranet golosona del centro<br>";
    
    $nombre= "Sergio";
    $apellidos = "Diaz Romero";
    $dni = "17485659R";
    $edad = 25;
    $fecha_nacimiento= "07/11/2025";



    //1. Paso a minúsculas
    Echo "Pon el paso a minúsculas";
    $nombre = strtolower($nombre);
    $apellidos = strtolower($apellidos);
    echo "nombre: ".$nombre  , "<br>";
    echo "nombre: ".$apellidos  , "<br>";


    //2. SEPARO APELLIDOS
    $apel = explode(" ", $apellidos);
    $apellido1 = $apel[0];
    $apellido2 = $apel[1];

    echo "Se separan los apellidos <br>";
    echo "Apellido1: $apellido1 <br>";
    echo "Apellido2: $apellido2 <br>";

    //3. SUSTITUIR TILDES Y EÑES
    $nombre = str_replace("á", "a", $nombre);
    $nombre = str_replace("é", "e", $nombre);
    $nombre = str_replace("í", "i", $nombre);
    $nombre = str_replace("ó", "o", $nombre);
    $nombre = str_replace("ú", "u", $nombre);
    $nombre = str_replace("ñ", "n", $nombre);


    $apellido1 = str_replace("á", "a", $apellido1);
    $apellido1 = str_replace("é", "e", $apellido1);
    $apellido1 = str_replace("í", "i", $apellido1);
    $apellido1 = str_replace("ó", "o", $apellido1);
    $apellido1 = str_replace("ú", "u", $apellido1);
    $apellido1 = str_replace("ñ", "n", $apellido1);

    
    $apellido2 = str_replace("á", "a", $apellido2);
    $apellido2 = str_replace("é", "e", $apellido2);
    $apellido2 = str_replace("í", "i", $apellido2);
    $apellido2 = str_replace("ó", "o", $apellido2);
    $apellido2 = str_replace("ú", "u", $apellido2);
    $apellido2 = str_replace("ñ", "n", $apellido2);


    //2 REVISAR APELLIDOS COMPUESTOS
    

    echo "Sustuir tildes y eñes <br>";
    echo "nombre: " .$nombre ,  "<br>";
    echo "apellido1: " .$apellido1 , "<br>";
    echo "apellido2:" . $apellido2, "<br>";

    //4 fechas
    //sI EL DIA O EL ES SOLO TIENE UNA CIFRA
    $F= explode("/", $fecha_nacimiento);
    $dia = $F[0];

    if(strlen($dia) == 1) {
        $dia = "0" .$dia;

    }

    $mes = $F[1];
    if(strlen($mes) == 1) {
        $MES = "1" .$mes;

    }
    $anio = $F[2];

    echo "<br><br> 4.- Fechas <br><br>";
    echo "dia: " .$dia. "<br>";
    echo "dia: " .$mes. "<br>";
    echo "dia: " .$anio. "<br>";
    
    // 5. DNI: Tenga o no letra, quiero pos 5,6,7
    $usuario = substr($nombre, 0, 1);
    $usuario = $usuario .substr($apellido1,0,3);
    $usuario = $usuario .substr($apellido2, 0,3);

    //6. MAYOR O MENOR DE EDAD
    $dni = substr($dni, -4, -3);
    echo "DNI" .$dni,  "<br>";



    //sI TIENES UN ESPACIO SE PUEDE ETAR COMIENDO VARIOS EL NAVEGADOR MAMON
    

    //Hay ciertos caracteres que si son compuestos los deberás de sustiutr
    // FECHA DE NACIMIENTO
    if ((2025 - $anio) >= 18){


    }


    //Si se te cuelan los espacios lo suyo es que utilices el trim.
    //Se supone que cada array es uno, pero no lo está realziando así.



?>

</body>
</html>