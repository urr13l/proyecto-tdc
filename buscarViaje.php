<?php
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link type="text/css" rel="stylesheet" href="css/fondos.css" media="screen,projection" />

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Viajes</title>
</head>

<body>
  <nav class="light-blue darken-4">
    <div class="nav-wrapper container">
      <a href="" class="brand-logo">
        <img src="imagenes/LOGO.png" height="58" class="" />
      </a>

      <!--Menú responsive-->
      <a href="#" data-target="menu-responsive" class="sidenav-trigger left">
        <i class="material-icons">menu</i>
      </a>
      <!--opciones del menúx-->
      <ul class="right hide-on-med-and-down">
        <li class="active">
          <a href="viajes.php">Viajes</a>
        </li>
        <li>
          <a href="perfil.php">Perfil</a>
        </li>
        <li>
          <a href="">Ayuda</a>
        </li>
        <li>
          <a href="salir.php">Salir</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--opciones de menú "hamburguesa responsive"-->
  <ul class="sidenav" id="menu-responsive">
    <li><a href="">Viajes</a></li>
    <li><a href="">Perfil</a></li>
    <li><a href="">Ayuda</a></li>
    <li><a href="index.php">Salir</a></li>
  </ul>

  <article>
    <section>
      <div class="row"></div>
      <div class="row">
        <div class="col s12 m4 l6">

          <?php
          if (isset($_POST['buscarViaje'])) {
            $seleccion = $_POST['selectViaje'];
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
            </div>
          </div>
          ";
                $idBoton++;
              }
            }
            mysqli_free_result($consulta_query);
            mysqli_close($conexion);
          }
            ?>
        </div>
        <div class="col s12 m4 l6">
          <div class="center"  id="respuestaViaje1">

          </div>
          
        </div>
      </div>
    </section>
  </article>

  <?php
            echo "
      <script>
          var botonComprar = document.getElementById('1');
          botonComprar.onclick = ajaxBotonComprar;

          var botonComprar2 = document.getElementById('2');
          botonComprar2.onclick = ajaxBotonComprar2;

          var botonComprar3 = document.getElementById('3');
          botonComprar3.onclick = ajaxBotonComprar3;
          
          var botonComprar4 = document.getElementById('4');
          botonComprar4.onclick = ajaxBotonComprar4;
          
          var botonComprar5 = document.getElementById('5');
          botonComprar5.onclick = ajaxBotonComprar5;

          var botonComprar6 = document.getElementById('6');
          botonComprar6.onclick = ajaxBotonComprar6;

          var botonComprar7 = document.getElementById('7');
          botonComprar7.onclick = ajaxBotonComprar7;

          var botonComprar8 = document.getElementById('8');
          botonComprar8.onclick = ajaxBotonComprar8;

          var botonComprar9 = document.getElementById('9');
          botonComprar9.onclick = ajaxBotonComprar9;

          var botonComprar10 = document.getElementById('10');
          botonComprar10.onclick = ajaxBotonComprar10;

          var botonComprar11 = document.getElementById('11');
          botonComprar11.onclick = ajaxBotonComprar11;

          var botonComprar12 = document.getElementById('12');
          botonComprar12.onclick = ajaxBotonComprar12;
          
          var botonComprar13 = document.getElementById('13');
          botonComprar13.onclick = ajaxBotonComprar13;

          var botonComprar14 = document.getElementById('14');
          botonComprar14.onclick = ajaxBotonComprar14;

          var botonComprar15 = document.getElementById('15');
          botonComprar15.onclick = ajaxBotonComprar15;

          var botonComprar16 = document.getElementById('16');
          botonComprar16.onclick = ajaxBotonComprar16;

          var botonComprar17 = document.getElementById('17');
          botonComprar17.onclick = ajaxBotonComprar17;
          
          var botonComprar18 = document.getElementById('18');
          botonComprar18.onclick = ajaxBotonComprar18;
          
          var botonComprar19 = document.getElementById('19');
          botonComprar19.onclick = ajaxBotonComprar19;

          var botonComprar21 = document.getElementById('21');
          botonComprar21.onclick = ajaxBotonComprar21;
";
          ?>

          <?php
          if ($seleccion == "Puerto Escondido") {
            echo "
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
  
            function ajaxBotonComprar3() {
              var ruta = 'idUrvan=3';
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
  
            function ajaxBotonComprar4() {
              var ruta = 'idUrvan=4';
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
  
            function ajaxBotonComprar5() {
              var ruta = 'idUrvan=5';
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
  
            function ajaxBotonComprar6() {
              var ruta = 'idUrvan=6';
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
  
            function ajaxBotonComprar7() {
              var ruta = 'idUrvan=7';
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
  
            function ajaxBotonComprar8() {
              var ruta = 'idUrvan=8';
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
  
            function ajaxBotonComprar9() {
              var ruta = 'idUrvan=9';
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
  
            function ajaxBotonComprar10() {
              var ruta = 'idUrvan=10';
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
  
            function ajaxBotonComprar11() {
              var ruta = 'idUrvan=11';
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
  
            function ajaxBotonComprar12() {
              var ruta = 'idUrvan=12';
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
  
            function ajaxBotonComprar13() {
              var ruta = 'idUrvan=13';
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
  
            function ajaxBotonComprar14() {
              var ruta = 'idUrvan=14';
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
  
            function ajaxBotonComprar15() {
              var ruta = 'idUrvan=15';
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
  
            function ajaxBotonComprar16() {
              var ruta = 'idUrvan=16';
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
  
            function ajaxBotonComprar17() {
              var ruta = 'idUrvan=17';
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
  
            function ajaxBotonComprar18() {
              var ruta = 'idUrvan=18';
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
  
            function ajaxBotonComprar19() {
              var ruta = 'idUrvan=19';
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
  
            function ajaxBotonComprar20() {
              var ruta = 'idUrvan=20';
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
  
            function ajaxBotonComprar21() {
              var ruta = 'idUrvan=21';
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
            }";
          } else {
            echo "
            function ajaxBotonComprar() {
              var ruta = 'idUrvan=22';
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
              var ruta = 'idUrvan=23';
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
  
            function ajaxBotonComprar3() {
              var ruta = 'idUrvan=24';
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
  
            function ajaxBotonComprar4() {
              var ruta = 'idUrvan=25';
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
  
            function ajaxBotonComprar5() {
              var ruta = 'idUrvan=26';
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
  
            function ajaxBotonComprar6() {
              var ruta = 'idUrvan=27';
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
  
            function ajaxBotonComprar7() {
              var ruta = 'idUrvan=28';
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
  
            function ajaxBotonComprar8() {
              var ruta = 'idUrvan=29';
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
  
            function ajaxBotonComprar9() {
              var ruta = 'idUrvan=30';
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
  
            function ajaxBotonComprar10() {
              var ruta = 'idUrvan=31';
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
  
            function ajaxBotonComprar11() {
              var ruta = 'idUrvan=32';
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
  
            function ajaxBotonComprar12() {
              var ruta = 'idUrvan=33';
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
  
            function ajaxBotonComprar13() {
              var ruta = 'idUrvan=34';
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
  
            function ajaxBotonComprar14() {
              var ruta = 'idUrvan=35';
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
  
            function ajaxBotonComprar15() {
              var ruta = 'idUrvan=36';
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
  
            function ajaxBotonComprar16() {
              var ruta = 'idUrvan=37';
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
  
            function ajaxBotonComprar17() {
              var ruta = 'idUrvan=38';
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
  
            function ajaxBotonComprar18() {
              var ruta = 'idUrvan=39';
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
  
            function ajaxBotonComprar19() {
              var ruta = 'idUrvan=40';
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
  
            function ajaxBotonComprar20() {
              var ruta = 'idUrvan=41';
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
  
            function ajaxBotonComprar21() {
              var ruta = 'idUrvan=42';
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
            }";
          }
         
          ?>

          <?php
          echo "
        </script>
      ";
          ?>

  <script type="text/javascript" src="js/inicializaciones.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

</body>

</html>