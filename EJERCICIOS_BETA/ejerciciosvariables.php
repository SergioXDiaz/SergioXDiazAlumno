<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//Ejercicios de arrays
$Notas = array(5,3,2,7,10,9,8,2,4);


$aprobados = Count(array_filter($Notas, function ($nota) {
    return $nota >= 5;
}));

$suspensos = Count($Notas) - $aprobados;
    if ($aprobados)  {
        echo "<br>El numero de aprobados es " .$aprobados;
    }

    if ($suspensos) {
        echo "<br>El numero de suspensos es " .$suspensos;
    }



//EL ARRAYS DE NOTAS CONTARÁ CON LAS NOTAS MENCIONADAS.
//Debemos tener el número de $aprobados debe mostrar que el numero de notas aprobadas 
// es 5
//Mientras que el nivel de $suspensos => 4

//EJERCICIO 2
/* Variable de frutas $precio kg 10, 11.3, 1.28, 4.7, 2 
Si el precio de una determinada fruta es mayor o igual a 4:
    Aplico un descuento del 10 por ciento. Almaceno el valor modificado
    en su posición.

    Sino, incremento de un 5% el precio y actualizo.

*/


//$frutas = array(10, 11.3, 1.28, 4.7, 2);
/*
$precioKG = array(10, 11.3, 1.28, 4.7, 2);
if ($precioKG[0] >= 4) {
    $precio[0] = $precio[0] * 0.90; } 
*/


/*Array ejercicio1 => Calcular la media
    -> Si la media es <5
        $Calificacion contendrá "SUSPENSO"
    -> Si la media es 5 o 6 -> "APROBADO"
    -> Si la media es 7 o 8 -> "NOTABLE"
    -> Si la media es 9 o 10 -> "SOBRESALIENTE"

*/

$notas2 = array(5,3,2,7,10,9,8,2,4);
$media = 0;
$calificacion = "";
$media = ($notas2[0] + $notas2[1] + $notas2[2] + $notas2[3] + $notas2[4] +  $notas2[5] + $notas2[6] + $notas2[7] + $notas2[8]) / 9;


echo $media; 


?>  



</body>
</html>