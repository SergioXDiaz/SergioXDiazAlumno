<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <!-- Habria que darle valores html a nombre para que esto no 
      sea un atentado a HTML --> 
      <h1> Tomando valores de la otra página churra Openwebinars2 </h1>
      <p> Nombre : <?php echo $_GET["nombre"] ?> </p>
      <p> Cargo : <?php echo $_GET["cargo"] ?> </p> <!-- La variable get es para que tome los valores de la variable churra-->
        <!-- Tiene que tener los mismos valores de la varible sino no sabría tomarlos -->
</body>
</html>