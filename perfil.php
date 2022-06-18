<?php
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <?php
    @session_start();
    echo "Bienvenido " . $_SESSION["usuarioactua"];
    ?>
</body>

</html>
