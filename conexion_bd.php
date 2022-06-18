<?php
$servidor = "127.0.0.1:3307";
$bd = "bd_tdc";
$user = "root";
$password = "";

$conexion = mysqli_connect($servidor, $user, $password, $bd) or die("No se ha podido conectar al servidor de Base de datos");
?>