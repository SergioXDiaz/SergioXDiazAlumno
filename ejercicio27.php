<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 0;
    $b = 1;

    $suma = $a + $b;
    $a = $b;
    $b = $suma;
    $suma = $a + $b;

    ?>
</body>
</html>