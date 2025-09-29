<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 bucles</title>
</head>
<body>
    <h1>Ejercicio 3: Múltiplos de 5 de 0 a 100 con bucle do while</h1>
    <?php
        $i=0;
        do{
            if($i%5 == 0){
                echo "$i <br>";
            }
            $i++;
        }while ($i<=100)
    ?>
</body>
</html>