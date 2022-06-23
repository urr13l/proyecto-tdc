<?php
include("seguridad.php");
?>

<!DOCTYPE html>
<html>
<html lang="es">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<!--opciones de menú "hamburguesa responsive"-->
<ul class="sidenav collapsible" id="menu-responsive">
  <!-- <li><a class='dropdown-trigger btn' href='#' data-target='dropdown6'>Viajes</a></li> -->
  <li>
    <div class="collapsible-header"><i class="material-icons">airport_shuttle</i>Viajes</div>
    <div class="collapsible-body">
      <ul>
        <li><a href="">Crear viajes</a></li>
        <li><a href="">Eliminar viajes</a></li>
        <li><a href="">Actualizar viajes</a></li>
      </ul>
    </div>
  </li>

  <li>
    <div class="collapsible-header"><i class="material-icons">airport_shuttle</i>Urban</div>
    <div class="collapsible-body">
      <ul>
        <li><a href="">Nueva viajes</a></li>
        <li><a href="">Disponibilidad viajes</a></li>
      </ul>
    </div>
  </li>

</ul>

</ul>

<!-- <ul id='dropdown6' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
   -->

<body>
  <!--Menú (nav)-->
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
        <li>
          <a class="dropdown-trigger" id="tiggerViajes" data-target="dropdown2">
            Viajes
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger" id="tiggerUrvan" data-target="dropdown3">
            Urvan
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger" id="tiggerConductor" data-target="dropdown4">
            Conductor
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger" id="tiggerAdministrador" data-target="dropdown5">
            Administrador
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger" id="tiggerPerfil" data-target="dropdown1">
            <i class="material-icons left">insert_emoticon</i>
            <?php @session_start();
            echo $_SESSION['usuarioactua']; ?>
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>

    </div>
  </nav>

  <ul id="dropdown1" class="dropdown-content">
    <li><a href="perfil.php" class="black-text">Ver tu perfil</a></li>
    <li><a href="perfil.php" class="black-text">Editar perfil</a></li>
    <li class="divider"></li>
    <li><a href="salir.php" class="black-text">Salir</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#" class="black-text">Crear</a></li>
    <li><a href="#" class="black-text">Eliminar</a></li>
    <li><a href="#" class="black-text">Actualizar</a></li>
  </ul>

  <ul id="dropdown3" class="dropdown-content">
    <li><a href="#" class="black-text">Nueva</a></li>
    <li><a href="#" class="black-text">Disponibilidad</a></li>
  </ul>

  <ul id="dropdown4" class="dropdown-content">
    <li><a href="#" class="black-text">Nuevo</a></li>
    <li><a href="#" class="black-text">Baja</a></li>
    <li><a href="#" class="black-text">Actualizar</a></li>
  </ul>

  <ul id="dropdown5" class="dropdown-content">
    <li><a href="#" class="black-text">Nuevo</a></li>
    <li><a href="#" class="black-text">Baja</a></li>
    <li><a href="#" class="black-text">Actualizar</a></li>
  </ul>

  <!--Contenido principal de la pagina web
          futuros cambios para la pagina
      -->
  <article>
    <section>
      sdkjfgsdkjfg<br>
    </section>
  </article>

  <!--footer, información de la pagína web-->
  <footer class="page-footer light-blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 l6">
          <h5 class="white-text">Nosotros te ayudamos</h5>
          <p class="grey-text text-lighten-4">Facturas</p>
          <p class="grey-text text-lighten-4">Métodos de pago</p>
          <p class="grey-text text-lighten-4">Términos y condiciones</p>
          <p class="grey-text text-lighten-4">Preguntas frecuentes</p>
        </div>
        <div class="col s12 m4 l6">
          <h5 class="white-text">Redes sociales</h5>
          <p class="grey-text text-lighten-4">
            <i class="small material-icons">language</i>
            <a class="grey-text text-lighten-3" href="https://www.facebook.com/TDC-102310959199125"> Facebook</a>
          </p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">© 2022 Copyright TDC</div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/inicializaciones.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>