<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//Ejercicio de notas
$Notas = array(5,3,2,7,10,9,8,2,4);
$aprobados = 0;
$suspensos = 0;

switch ($Notas) {
    case ($Notas[0] >= 5):
    $aprobados++;
    break;

    case ($Notas[0]< 5):
    $suspensos++;
    break;

    case ($Notas[1] >= 5):
    $aprobados++;
    break;

    case ($Notas[1] < 5):
    $suspensos++;
    break;

    case ($Notas[2] >= 5):
    $aprobados++;
    break;

    case ($Notas[2] < 5):
    $suspensos++;
    break;

    case ($Notas[3] >= 5):
    $aprobados++;
    break;

    case ($Notas[3] < 5):
    $suspensos++;
    break;

    case ($Notas[4] >= 5):
    $aprobados++;
    break;

    case ($Notas[4] < 5):
    $suspensos++;
    break;

    case ($Notas[5] >= 5):
    $aprobados++;
    break;

    case ($Notas[5] < 5):
    $suspensos++;
    break;
    
    case ($Notas[6] >= 5):
    $aprobados++;
    break;

    case ($Notas[6] < 5):
    $suspensos++;
    break;

    case ($Notas[7] >= 5):
    $aprobados++;
    break;

    case ($Notas[7] < 5):
    $suspensos++;
    break;

    case ($Notas[8] >= 5):
    $aprobados++;
    break;

    case ($Notas[8] < 5):
    $suspensos++;
    break;

}

echo "han aprobado " .$aprobados, "y suspendido " .$suspensos; 





?>  
</body>
</html>