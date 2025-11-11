<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Pedimos un número (puedes modificarlo 
$numero = 7; // ejemplo: número inicial

// Verificamos si el número es positivo
if ($numero > 0) {
    echo "Contando desde $numero hasta 0:<br>";

    while ($numero >= 0) {
        echo $numero . "<br>";
        $numero--; // restamos 1 en cada iteración
    }
} else {
    echo "El número no es positivo. No se puede ejecutar el bucle.";
}
?>
</body>
</html>