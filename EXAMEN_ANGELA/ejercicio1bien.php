<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //EJERCICIO 1
echo "*** EJERCICIO 1 ***<br><br>";
$dobles = 0;
$seguidas = 0;
$tiradas = 0;

while ($dobles < 3) {
    $m1 = rand(0, 1);
    $m2 = rand(0, 1);
    $tiradas++;
    echo "Tirada $tiradas: Moneda 1: $m1, Moneda 2: $m2<br>";

    if ($m1 == 0 && $m2 == 0) {
        $dobles++;
        echo "¡He sacado dobles! Total de dobles: $dobles<br>";
        if ($seguidas == 0) { //No habia sacado seguidas antes
            $seguidas = 1; //Ya se que he generado 2 caras seguidas
        } else { //La vez anterior ya saqué dobles
            $dobles = 0; //Reseteo los dobles porque he sacado 2 seguidas
            $seguidas = 0; //Reseteo las seguidas
            echo "¡He sacado 2 dobles seguidas! Reseteo el contador de dobles.<br>";
        }
    } else {
        $seguidas = 0; //Reseteo las seguidas porque no he sacado dobles
    }
}

echo "Han sido necesarias $tiradas tiradas para obtener 3 dobles no seguidos.";
?>
</body>
</html>