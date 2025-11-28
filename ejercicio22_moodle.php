<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Recorre una matriz 3x3 con bucles anidados. Si un número es múltiplo 
    $matriz = [
        [1, 2, 3], //1º ITERACCIÓN, FILA = MATRIZ[0]
        [4, 5, 6], //2º ITERACCIÓN, FILA = MATRIZ[1]
        [7, 8, 9]  //3º ITERACCIÓN, FILA = MATRIZ[2]
    ];

    echo "24. Recorrido de Matrix 3x3 con formato condicional:\n";
    foreach ($matriz as $fila) {
        foreach ($fila as $numero) {
            $es_par = ($numero % 2 === 0);
            $es_mult_3 = ($numero % 3 === 0);
            $formato = $numero;

            if ($es_par && $es_mult_3) {
                echo "$numero multiplo de 2 y 3 <br>";
            } elseif ($es_par) {
                echo "$numero multiplo de 2 solo <br>";
        }   elseif ($es_mult_3) {
            echo "$numero multiplo de 3 solo";
        }
// Para acceder a una matriz de matrices se pondrá (2.1)
// $matriz = 123 (0)
        //longitud igual o superior a 3; //$matriz[0], $matriz[1], $matriz[2]
        // foreach ($matriz as $fila ) //$matriz[0], $matriz[1], $matriz[2]
            //foreach ($fila as $elemento ) // $fila[0], $fila[1]
            
            //if strlong($elemento) >=3 echo "Encontrado $elemento 2<br>
    }
    }
    ?>
</body>

</html>