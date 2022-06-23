<?php
$seleccion = $_POST['seleccion'];
$id_urvan;
$dispUrvan;
$salidaUrvan;
$origenUrvan;
$conductor;
$destino;
if ($seleccion == "Puerto Escondido") {
  $destino = "Oaxaca";
} else {
  $destino = "Puerto Escondido";
}
$idBoton = 1;

include("conexion_bd.php");

$consulta_query = mysqli_query($conexion, "SELECT c_id_urvan, c_disponibilidad, c_hora_salida, c_origen  FROM urvan WHERE c_origen = '$seleccion'") or die("No se pudo realizar la consulta");
if (mysqli_num_rows($consulta_query) > 0) {
  while ($fila = mysqli_fetch_array($consulta_query)) {
    $id_urvan = $fila['c_id_urvan'];
    $dispUrvan = $fila['c_disponibilidad'];
    $salidaUrvan = $fila['c_hora_salida'];
    $origenUrvan = $fila['c_origen'];
    $consultaConductor = mysqli_query($conexion, "SELECT c_nombre FROM conductor WHERE id_urvan = $id_urvan");
    $filaConductor = mysqli_fetch_array($consultaConductor);
    $conductor = $filaConductor['c_nombre'];
    echo "
    <div class='col s12 m12 l6'>
      <div class='card-panel light-blue accent-1 hoverable center-align'>
        <span class='black-text '>
          $origenUrvan - $destino
        </span>
        <br>
        <p>Salida: $salidaUrvan </p>
        <p>Conductor: $conductor </p>
        <br>
        <button class='btn waves-light black-text' type='button' name='action' id='$idBoton'>Comprar
        </button>
        <div class='' id='respuestaViaje$idBoton'>
        </div>
      </div>
    </div>
    ";
    $idBoton++;
  }
}
mysqli_free_result($consulta_query);
mysqli_close($conexion);

echo "
<script>
    var botonComprar = document.getElementById('1');
    botonComprar.onclick = ajaxBotonComprar;

    var botonComprar2 = document.getElementById('2');
    botonComprar2.onclick = ajaxBotonComprar2;

    function ajaxBotonComprar() {
      var ruta = 'idUrvan=1';
      $.ajax({
        url: 'guardarDatosViaje.php',
        type: 'POST',
        data: ruta
      }).done(function(res) {
        $('#respuestaViaje1').html(res)
      }).fail(function() {
        console.log('Error');
      }).always(function() {
        console.log('complete guardar viaje');
      });
    }

    function ajaxBotonComprar2() {
      var ruta = 'idUrvan=2';
      $.ajax({
        url: 'guardarDatosViaje.php',
        type: 'POST',
        data: ruta
      }).done(function(res) {
        $('#respuestaViaje1').html(res)
      }).fail(function() {
        console.log('Error');
      }).always(function() {
        console.log('complete guardar viaje');
      });
    }
  </script>
" ;

?>