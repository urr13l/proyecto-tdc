<?php

$idUrvan = $_POST['idUrvan'];

include("conexion_bd.php");

$consulta_query = mysqli_query($conexion, "INSERT INTO compra VALUES (3,0,$idUrvan,1,100.0,'1 hora','23/06/22','1:16 a.m')") or die("No se pudo realizar la consulta");
echo "<script>
window.location.href = \"seleccionarAsiento.php\"
</script>";

?>