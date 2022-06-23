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
      <br>
      <div id="fondo">
        <div class="container">
          <br>
          <h6>¿A donde te vamos a llevar?</h6>
          <form method="POST">
            <div class="row">

              <div class="input-field col s12 m6 l4">
                <select id="selectOrigen">
                  <option value="0" disabled selected>Desde donde viaja</option>
                  <option value="1">Puerto Escondido</option>
                  <option value="2">Oaxaca</option>
                </select>
                <label>Origen</label>
              </div>
              <!-- posible cambio
              <div class="input-field col s12 m6 l4">
                <select name="selectViaje">
                  <option value="sn" disabled selected>Hacia donde viaja</option>
                  <option value="Puerto Escondido">Puerto Escondido</option>
                  <option value="Oaxaca capital">Oaxaca capital</option>
                </select>
                <label>Destino</label>
              </div>
              -->
              <div class="input-field col s2 m2 l2">
                <button class="btn light-blue darken-4" type="button" name="buscarViaje" id="btnBuscarViaje">
                  Buscar viaje
                </button>
              </div>

            </div>
          </form>
          <br>
        </div>
      </div>
    </section>
  </article>

  <article>
    <section>
      <div class="row">
        <div class="container" id="respuestaConsulta">

        </div>
      </div>
    </section>
  </article>


  <script>
    var seleccion = document.getElementById('selectOrigen');

    var botonEnviar = document.getElementById('btnBuscarViaje');
    botonEnviar.onclick = pasarjAax;

    function pasarjAax() {
      var opcion = seleccion.options[seleccion.selectedIndex].text;
      var ruta = "seleccion=" + opcion;

      $.ajax({
        url: 'buscarViaje.php',
        type: 'POST',
        data: ruta
      }).done(function(res) {
        $('#respuestaConsulta').html(res)
      }).fail(function() {
        console.log("Error");
      }).always(function() {
        console.log("complete");
      });
    }
  </script>

  <script type="text/javascript" src="js/inicializaciones.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

</body>

</html>