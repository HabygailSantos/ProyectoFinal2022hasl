<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/iconofavi.png">
    <title></title>
</head>
<body>
    <?php
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];

    if ($usuario == "admin" && $contraseña == "mensajes") {
        echo "Usuario y Contraseña Correcto";
    }else{
        echo "Usuario/ Contraseña incorrecto";
    }
    ?>
</body>
</html>