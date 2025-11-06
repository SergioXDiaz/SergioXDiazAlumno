<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Simula el lanzamiento de dos monedas mediante numeros aleatorios. Cada vez que ambos
    // salen cara, debe mostrar el mensaje suerte doble y el programa seguirá mostrando
    //EJ1 2 MONEDAS DOBLES 3
    $dobles = 0;
    $tiradas = 0;
    $seguidas = 0;

    //2 dobles seguidos, empiezo desde 0.
    while ($dobles < 3) {
    $tiradas++;
    $m1 = rand(0,1); //asingacion
    $m2 = rand(0,1); // asignacion

    //tienes que crear una variable que cuente las tiradas


    //comparacion, doble igual y triple igual, compararlo en el w3c schools
    // TIENES QUE PONER QUE SE CUMPLAN LAS DOS CONDICIONES CON EL AND, &&, NO EL OR, EL AND POR HUEVAZOS

    if ($m1 == 0 && $m2 == 0) {
        $dobles++; echo "Suerte doble";
        if ($seguidas = 0) {
            $seguidas = 1;
        }   
    }
    else {
        $seguidas = 0;

    }

} 
?>

</body>
</html>