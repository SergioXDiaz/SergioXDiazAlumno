
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Solicitar los tres números
$num1 = readline("Por favor, ingresa el primer número: ");
$num2 = readline("Por favor, ingresa el segundo número: ");
$num3 = readline("Por favor, ingresa el tercer número: ");

// Verificar si al menos uno es mayor que 100
if ($num1 > 100 || $num2 > 100 || $num3 > 100) {
    echo "Al menos uno de los números ingresados es mayor que 100." . "<br>";
} else {
    echo "Ninguno de los números ingresados es mayor que 100." . "<br>";
}

?>

</body>
</html>