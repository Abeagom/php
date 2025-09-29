<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 bucles</title>
</head>
<body>
    <h1>Ejercicio 1: Múltiplos de 5 de 0 a 100</h1>
    <?php
    for ($i = 0 ; $i<=100; $i++){
        if ($i %5 == 0){
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>