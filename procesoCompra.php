<?php
$asiento = $_POST['Asiento'];
$asientoActualizado;
$comp = "c_asiento_".$asiento;

include("conexion_bd.php");

$consulta_query = mysqli_query($conexion, "SELECT * FROM urvan WHERE c_id_urvan = 1") or die("No se pudo realizar la consulta");
if (mysqli_num_rows($consulta_query) > 0) {
  while ($fila = mysqli_fetch_array($consulta_query)) {
    $asientoActualizado = $fila['c_asiento_'.$asiento];
    if ($fila['c_asiento_'.$asiento] == 0) {
      mysqli_query($conexion, "UPDATE urvan SET $comp = 1 WHERE c_id_urvan = 1") or die("No se pudieron insertar los datos");
    } elseif ($fila['c_asiento_'.$asiento] == 1) {
      echo "El asiento que desea comprar ya ha sido comprado, seleccione otro";
    }
  }
}
mysqli_free_result($consulta_query);
mysqli_close($conexion);

?>
