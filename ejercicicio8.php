<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
do {
    echo "\n===== CALCULADORA =====\n";
    echo "0 - Salir\n";
    echo "1 - Sumar\n";
    echo "2 - Restar\n";
    echo "3 - Multiplicar\n";
    echo "4 - Dividir\n";
    $opcion = (int)readline("Elije una opcion: ");

    if ($opcion >= 1 && $opcion <= 4) {
        $num1 = (float)readline("Ingresa el primer numero: ");
        $num2 = (float)readline("Ingresa el segundo numero: ");
        $resultado = 0;

        if ($opcion == 1) {
            $resultado = $num1 + $num2;
            echo "El resultado de la suma es: $resultado\n";
        } elseif ($opcion == 2) {
            $resultado = $num1 - $num2;
            echo "El resultado de la resta es: $resultado\n";
        } elseif ($opcion == 3) {
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicacion es: $resultado\n";
        } elseif ($opcion == 4) {
            if ($num2 == 0) {
                echo "Error: no se puede dividir por cero.\n";
            } else {
                $resultado = $num1 / $num2;
                echo "El resultado de la divicion es: $resultado\n";
            }
        }
    } elseif ($opcion != 0) {
        echo "Opcion no valida. Intentalo de nuevo.\n";
    }

} while ($opcion != 0);

echo "Saliendo de la calculadora...\n";
?>
</body>
</html>