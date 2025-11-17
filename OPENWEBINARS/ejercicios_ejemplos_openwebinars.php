<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php
        echo "Hola Mundo"; //Simplemente recuerda poner punto y coma, y recuerda
        //que echo es para mostrar por pantalla
        /* This how works with * and / */
        
        //Una variable es un espacio de memoria en el que podemos guardar un valor.
        //Contiene informacion que puede cambiar y que es case sensitive (distingue mayusculas y minusculas)
        //Tengo un valor y quiero que ese valor sea guardado dentro de una caja (variable) (si quiero que machaque algo o
        // no, tengo que usar el Insert en mi equipo de casa pa que no machaque lo que escribo, joder)

        /* ***********************VARIABLES***************************
        Una variable tiene que comenzar con letra, jamas con numero ni con simbolos raros, 
        Ni usar palabras reservadas de PHP (como echo, if, else, while, for, etc).
        */

        $edad = 39;
        $estatura = 1.29;
        $nombre ="Luis Javier"; //Siempre al final con punto y coma
        $frase = "Luisja tiene $edad años"; //Puedo usar variables para sustuir cosas;
        $frase2 = 'Luisja tiene $edad años'; //Variable simple para que no me pille las comillas
        $profesor = true; //Si la variable es true mostrará un uno, sino no

        echo "<br>" .$edad;
        echo "<br>" .$estatura;
        echo "<br> Tu nombre es " .$nombre, " junto con tu edad que resulta en " .$edad, "." ;
        echo "<br>" .$profesor; //Si la variable es true, mostrará un uno, sino no.

        echo "<br><br><H1> NECESARIO PARA MOSTRAR SI ES VERDADERO O FALSO, TIENES QUE PONERLE UN 
        PUNTO CADA VEZ QUE ENCADENES VARIABLES </H1>";
        echo "<br>" .json_encode($profesor); //Por si me quiere mostrar si la variable es true, or false
        // deberé usar el true o el false.

        // Así estaria mal declarar una variable churra $6edad = "hola";







        /********************LECCION 2 DE PHP, ALCANCE DE LAS VARIABLES ********************************/
        /* El contexto de las variables.
        El global es fuera de la funcion, es decir, alcancaría a todo.
        Mientras que el local solo afectaría a una función */

        $num1 = 22;
        $num2 = 33;
        function prueba() {
            $valor =10;
            echo "<br><h1>Probación de funciones con valor local churra</h1>" .$valor; //esta variable es de ambito global y no la puedo usar dentro de las funciones
            
        }

        //Para llamar a la funcion
        prueba();


        //Si quiero que variables globales puedan ser usadas dentro de la misma función puedo hacerlo
        //usando global

        echo "<br> <h2> Poner variables globales de forma local en las funciones</h2>";
        function prueba2() {
            global $num1, $num2;
            $num3 = $num2 + $num1;
            echo $num3;
        }

        prueba2();



        echo "<br> <h3> Variables del servidor predefinidas </h3>";
        /****************VARIABLES PREDEFINIDAS CHURRA ***************************** */
        /* Vienen ya predefinidas por el lenguaje y las puedo usar tanto dentro como fuera de una función */
        /*Algunas superglobales puedo definirlas en todos los ámbitos */
        $numero = 33;
        echo "<br> Nombre del servidor: " . $_SERVER['SERVER_NAME']; //Cuando accedo a valores predefinidos y mas si
        //son del servidor es recomendable 
        echo "<br> Software del servidor: " . $_SERVER['SERVER_SOFTWARE']; //Para acceder al software que usa el server
        echo "<br> Puerto del servidor: " . $_SERVER['SERVER_PORT']; //Puerto que está usando apache


        echo "<br> La variable número es " .$GLOBALS['numero']; //No es comun hacer esto pero puedo hacer churra;
    ?>  
</body>
</html>