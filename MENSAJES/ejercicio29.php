<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $matriz = [
        [24, 23, 22, 21, 20], //1º ITERACCIÓN, FILA = MATRIZ[0]
        [19, 18, 17, 16, 15], //2º ITERACCIÓN, FILA = MATRIZ[1]
        [14, 13, 12, 11, 10],
        [9, 8, 7, 6, 5],
        [4, 3, 2, 1, 0]  //3º ITERACCIÓN, FILA = MATRIZ[2]
    ];

    $suma = $matriz[0][0] + $matriz[1][1] + $matriz [2][2] + $matriz [3][3] + $matriz[4][4]; 
    echo $suma;
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



    
    $suma = $matriz[0][0] + $matriz[1][1] + $matriz [2][2] + $matriz [3][3] + $matriz[4][4]; 
    echo $suma;
    ?>
</body>
</html>