<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("Hello Word"); // FUNCTION RETURNS THE LENGHT OF A STRING 
    echo str_word_count("e He llo world!"); //Cuenta el numero de palabras
    echo strpos("Hello world!", "world"); //Te dice en que posicicion se encuentra la cadena que queremos buscar.
    //🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠🤠​🤠 
    //🤠​🤠
    $prueba=strpos("Hello", "world");
    echo var_dump($prueba); 

    $x = "HeLLo World";
    echo strtoupper($x); //strtolower pa convertir las palabras en minuscula.
    // Para remplacar es con replace 

    $y= "Hello world";
    echo strrev($y); //Los numeros los coge exactamente igual

    // Remover los espacios
    $z=" Hello World! ";
    echo trim($z); //Se suele usar mucho

   // Convierte una cadena a un array en el espacio que tú le indiques
   // $x = "Hello World";
   // $y = explode(" ", $x);
   // print_r($y); Caracter que separa una palabra de otra 

    /*9.- (en clase)Escribe un programa que pida un nombre de usuario y una contraseña, y verifique si ambos cumplen con estas condiciones:
a) El nombre de usuario debe tener más de 5 caracteres.
b) La contraseña debe tener al menos 8 caracteres y contener al menos un número.
c) Usa condicionales con operadores AND y OR para validar.*/

        /*
        $x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/
/* Se pueden poner dos variables en una misma variable
        $var= 23;
        $mensaje = "El valor de mi variables es";
        echo $mensaje.$var;

        $x = "Hello";
        $y = "World";
        $z= $x . $y .$var;
        echo $z;

        --------------------------------------------------------------------------------
    $x = "Hello World";
    echo substr($x, 6,15); -- la x que coja de esta cadena y el numero de posiciones que va a coger.
    -----------------------
    //tengo el nombre de angel arider y quiero que coga los apellidos

    $nombre = "Angela Rider Jimenez";
    $nombre2 = "Antonio Aguirre";
    echo substr($nombre, 7, 100);


    explode para que se pueda sacar el nombre compuesto con el array
    $x = "Hello World";
    echo substr($x, 6,5);

    $array = str_word_count ("Hello World", 2);

    var_dump($array);

    $array = str_word_count ("Hello World", 2);

    var_dump($array);
    -- Si sabemos que hay tres palabras
    
*/


    ?>


</body>
</html>