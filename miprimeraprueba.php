<!DOCTYPE html>
<html>
<body>
 

<h1> Mi primera web </h1> <!-- Sino tengo Apache levantado, no irá hace falta que funcione el servidor web
para que te lea el PHP --> 

<?php //Inicio de código web PHP
//ECHO SIRVE PARA MOSTRAR 
echo "My first PHP script!"; //Las cadenas de texto van entre comillas
//todas las sentencias deben terminar en punto y coma

/*Las variables son contenedores de información
cada vez que quieras hacer referencia a $X haremos referencia l propio dolar X
va con el simbolo del dolar las variables
una variable es un espacio que se reserva en memoria


Ejercicio 3: Variables */
$edad= 25;
$nombre = "Sergio";
echo "<br><br><br>eSCRIBA AQUI LO QUE QUIERA, ya pilla salto de linea "; /*Salto de línea*/
echo "Mi nombre es " .$nombre, " y mi edad es " .$edad, "."; /*Nada que vaya haciendo comentarios sobre poner punto para poder concatenar
las frases cómicas*/



//EJERCICIO 4: VARIBALES Y CONCATENACIÓN A LO ANTERIOR, VAMOS BASICAMENTE LO MISMO QUE LO ANTERIOR.

//EJERCICIO 5: CONCATENACIÓN Y MEZCLA DE VARIABLES CON HTML

//Declaración de variables
$txt1="Learn PHP";
$txt2="W3Schools.com";

echo '<h2>' .$txt1 . '</h2>';
echo '<h1>' .$txt2 . '</h1>';

//Si quiero meter carácteres especiales necesito ponerle contrabarra \
$x = 7;
echo "Este es el símbolo del dólar: y para que funcione hace falta contrabarra: \$";
echo "Para que sea un salto de línea será: \n"; //El salto de línea no funciona con el contrabarra 
echo "Ves cómo NO ha saltado la línea julandrón, no funciona el contrabarra N mejor con el brrrrrr";
echo "<br> JAJAJAJ toma otro carácter especial, perro : ' ";

//Tipos de variables : 
// $teatro = "Tipo string";
//$Entero = 5;
/* $decimal = 10.5;
$bool = Sirve para indicar si es verdadero o falso
$y = TRUE; */

//Esto sirve para pruebas internas
$variableBool = true;
$variableBool2= TRUE;

var_dump($variableBool);

$m = true;
$tipoDato = "var_dump($m)"; //Se le mete dentro la variable para ver el tipo de datos

$prueba = 5;
echo "<br>El tipo de dato de la variable \$m es: $tipoDato";
echo "<br> $tipoDato";

//Definicion de los arrays simples. Un array es un conjunto de valores dentro de la misma variable:
// cars 0= volvo 1= BMW, toyota=2: Lo suyo es acceder a los arrays a través de posiciones concretas.
//La varuable es como una caja en la que se almacena un único alor, y ahora admito N valores, que son cómo un índice, y este índice coincide
//en la posición exacta en la que se encuentra el elemento.


?> <!-- FIN DEL COMENTRIO EN CODIGO DE PHP -->

<?php

echo "<h1> Ejercicio de arrays de coches </h1>";
//ARAYS AQUÍ SEPARADO MEJOR
$cars = array("Volvo", "BMW", "Toyota");
echo "<br><br>";
var_dump($cars);

//SELECCIÓN DE LO QUE QUIERO CONCRETAMENTE CON EL ARRAY
echo "<br> Mi coche es un: " .$cars[2];

//Ejercicio de ejemplo de arrays
echo "<h1> Ejercicio de arrays de edad </h1>";
$alumno = array("Sergio", "Diaz Romero", 18, 9.8);
echo "<br><br>";

echo "<br>El alumno " .$alumno[0], $alumno[1], " con edad de ", $alumno[2], " ha aprobado con un " .$alumno[3] ;

echo "<h1> Ejercicio de arrays de fruta </h1>";
//Ejercicio Ejemplo de arrays parte 2
$fruta = array("Pera", 3.4, 20);

echo "<br>La " .$fruta[0], " está a " .$fruta[1], "\€ el Kg.";

//HACER DOS REPOSITORIOS DIFERENTES Y TENER D
?>




</body>
</html>
