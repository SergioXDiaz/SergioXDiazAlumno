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
echo "<br><br><br>";
echo "Mi nombre es " .$nombre, " y mi edad es " .$edad, ".";

?> <!-- FIN DEL COMENTRIO EN CODIGO DE PHP -->



</body>
</html>
