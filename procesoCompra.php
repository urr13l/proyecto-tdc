<?php
$asiento = $_POST['Asiento'];
$idUrvan = $_POST['idUrvan'];
$idUsuario;
$asientoActualizado;
$comp = "c_asiento_".$asiento;

include("conexion_bd.php");

$consulta_query = mysqli_query($conexion, "SELECT * FROM urvan WHERE c_id_urvan = $idUrvan") or die("No se pudo realizar la consulta");
if (mysqli_num_rows($consulta_query) > 0) {
  while ($fila = mysqli_fetch_array($consulta_query)) {
    $asientoActualizado = $fila['c_asiento_'.$asiento];
    if ($fila['c_asiento_'.$asiento] == 0) {
      mysqli_query($conexion, "UPDATE urvan SET $comp = 1 WHERE c_id_urvan = $idUrvan") or die("No se pudieron insertar los datos");
    } elseif ($fila['c_asiento_'.$asiento] == 1) {
      echo "El asiento que desea comprar ya ha sido comprado, seleccione otro";
    }
  }
}
@session_start();
$usuarioSesion = $_SESSION['usuarioactua'];
$consulta_idUsuario = mysqli_query($conexion, "SELECT c_id_usuario FROM cliente WHERE c_usuario = '$usuarioSesion'") or die("No se pudo realizar la consulta");
if (mysqli_num_rows($consulta_idUsuario) > 0) {
  $fila = mysqli_fetch_array($consulta_idUsuario);
  $idUsuario = $fila['c_id_usuario'];
}

date_default_timezone_set('America/Mexico_City');
$fecha = date('d-m-y');
$hora = date('h:i A');

$insertarDatos = mysqli_query($conexion, "INSERT INTO compra VALUES ($idUsuario,$asiento,$idUrvan,1,100.0,'1 hora','$fecha','$hora')") or die("No se pudo realizar la consulta");

echo " <script>
  window.location.href = \"comprarBoleto.php\";
 </script>";

mysqli_free_result($consulta_query);
mysqli_close($conexion);

?>
