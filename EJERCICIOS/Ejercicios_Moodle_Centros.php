<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Ejercicio 22
        $frase = "El lenguaje de programación es un lenguaje que permite a las personas comunicarse con las máquinas utilizando un lenguaje";
        $frase_minusculas = strtolower($frase);
        $palabra_a_buscar = "lenguaje";
        $contador = 0;
        $palabras = explode(" ", $frase_minusculas);
        $total_palabras = count($palabras);
        foreach ($palabras as $palabra) {
            if ($palabra === $palabra_a_buscar) {
                $contador++;
            }
        }

        echo "La palabra " .$palabra_a_buscar . " aparece " . $contador . "veces en la frase ";
        echo "El total de las palabras en la frase es: " .$total_palabras ."<br>";
?>
</body>
</html>
