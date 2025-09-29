<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 bucles</title>
</head>
<body>
    <h1>Ejercicio 2: Múltiplos de 5 de 0 a 100 con bucle while</h1>
    <?php
        $i=0;
        while ($i<=100){
            if($i%5 == 0){
                echo "$i <br>";
            }
            $i++;
        }
    ?>
</body>
</html>