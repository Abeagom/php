<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña</title>
</head>

<body>
    <h1>Introduce la contraseña. Tienes 4 intentos </h1>
    <form action="" method="get">
        <input type="password" name="contraseña"><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    $contraseña = "1234";
    $intento = $_GET['contraseña'];
    $numIntentos = 4;
    if ($contraseña == $intento) {
        echo "Contraseña correcta. Acceso concedido";
    }else{
        $numIntentos--;
        echo "Contraseña incorrecta. Intentos restantes $numIntentos";
    }
    ?>
</body>

</html>