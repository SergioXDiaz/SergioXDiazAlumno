<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dobles = 0;
        $seguidas = 0;
        $tiradas = 0;

    while ($dobles <3){
        $m1=rand(0,1); //los numeros generan por los milisegundos
        $m2=rand(0,1);
        $tiradas++;
        echo "Tirada $tiradas: Moneda 1: $m1, Moneda 2: $m2 </br>";

    }
    //Reseteo del contador de dobles.

    

    ?>
</body>
</html>