<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    La multiplicación de <?php 
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo $numero1 . " y " . $numero2 . " es " . ($numero1 * $numero2);
    ?>
</body>
</html>