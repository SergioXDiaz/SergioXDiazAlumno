<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numero = (int)readline("Intruduce un numero: ");
$esPrimo = true;

if ($numero <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i < sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break; // si encuentra un divisor, ya no es primo
        }
    }
}

if ($esPrimo) {
    echo "El numero $numero es primo\n";
} else {
    echo "El numero $numero no es primo\n";
}
?>
</body>
</html>