<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>

<body>
    <form method="get">
        <label for="numero">Introduce número</label>
        <input type="number" value="Mostrar" name="numero">
        <input type="submit" value="Enviar" name="Enviar">
    </form>

    <?php
        if(isset($_GET['numero'])){
            $n = intVal($_GET['numero']);
            echo "<h2> Tabla del $n </h2>";
            echo "<table border='1'>";
            for($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$n</td><td>X</td><td>$i</td><td>=</td><td>".($n*$i)."</td><tr>";
            }
            echo "</table>";    
        }
    ?>
</body>

</html>