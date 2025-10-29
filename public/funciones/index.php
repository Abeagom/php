<?php
require_once "funciones_b.php";
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=media(2,4,6)?></h1>
    <h1><?=potencia(2,2)?></h1>
    <h1><?php
    if(esPar(10)){
        echo "Es par";
    }else{
        echo "No es par";
    }
    ?>
    </h1>
    <h1><?=factorial(5)?></h1>
</body>
</html>