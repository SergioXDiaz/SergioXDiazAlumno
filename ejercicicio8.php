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
    
    echo "<br>===== CALCULADORA =====<br>";
    echo "0 - Salir<br>";
    echo "1 - Sumar<br>";
    echo "2 - Restar<br>";
    echo "3 - Multiplicar<br>";
    echo "4 - Dividir<br>";
    echo "5 - El módulo de dos números<br>";
    $opcion = readline("Elije una opcion: ");

    if ($opcion >= 1 && $opcion <= 5) {
        $num1 = readline("Ingresa el primer numero: ");
        $num2 = readline("Ingresa el segundo numero: ");
        $resultado = 0;

        if ($opcion == 1) {
            $resultado = $num1 + $num2;
            echo "El resultado de la suma es: $resultado<br>";
        } elseif ($opcion == 2) {
            $resultado = $num1 - $num2;
            echo "El resultado de la resta es: $resultado<br>";
        } elseif ($opcion == 3) {
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicacion es: $resultado<br>";
        } elseif ($opcion == 4) {
            if ($num2 == 0) {
                echo "Error: no se puede dividir por cero.<br>";
            } else {
                $resultado = $num1 / $num2;
                echo "El resultado de la divicion es: $resultado<br>";
            }
        } elseif ($opcion ==5) {
            if ($num2 == 0) {
                echo "No se puede dividir por cero";
            } else {
                  $resultado = $num1 % $num2;
                      echo "El módulo es: $resultado<br>"; /* 🤠​🤠​*/
            }
        
              
        }
    } elseif ($opcion != 0) {
        echo "Opcion no valida. Intentalo de nuevo.<br>";
    }

} while ($opcion != 0);

echo "Saliendo de la calculadora...<br>";
?>
</body>
</html>