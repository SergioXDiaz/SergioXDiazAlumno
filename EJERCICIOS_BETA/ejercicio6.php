<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numero = rand(1, 100);
$intentos = 0;

do {
    $usuario = (int)readline("Adivina el número (entre 1 y 100): ");
    $intentos++;

    if ($usuario < $numero) {
        echo "El número es mayor.\n";
    } elseif ($usuario > $numero) {
        echo "El número es menor.\n";
    } else {
        echo " Has acertado en $intentos intentos.\n";
    }
} while ($usuario != $numero);
/*El numero es random, no readline*/
?>
</body>
</html>