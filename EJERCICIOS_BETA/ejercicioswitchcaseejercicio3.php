<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $notas2 = array(5,3,2,7,10,9,8,2,4);
    $media = (($notas2[0] + $notas2[1] + $notas2[2] + $notas2[3] + $notas2[4] +  $notas2[5] + $notas2[6] + $notas2[7] + $notas2[8]) / 9);

    switch ($media) {
  case ($media < 5):
    echo "Aprobado";
    break;


}

?>

</body>
</html>