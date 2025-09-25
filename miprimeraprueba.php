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
echo "Este es el símbolo del dolor: \$";
?> <!-- FIN DEL COMENTRIO EN CODIGO DE PHP -->



</body>
</html>
