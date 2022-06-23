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
<ul class="sidenav" id="menu-responsive">
  <li><a href="viajes.php">Viajes</a></li>
  <li><a href="">Perfil</a></li>
  <li><a href="">Ayuda</a></li>
  <li><a href="salir.php">Salir</a></li>
</ul>

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
          <a href="viajes.php">Viajes</a>
        </li>
        <li>
          <a href="">Ayuda</a>
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

  <ul id="dropdown1" class="dropdown-content ">
    <li><a href="perfil.php" class="black-text">Ver tu perfil</a></li>
    <li class="divider" class="black-text"></li>
    <li><a href="perfil.php" class="black-text">Editar perfil</a></li>
    <li class="divider" class="black-text"></li>
    <li><a href="salir.php" class="black-text">Salir</a></li>
  </ul>

  <!--Contenido principal de la pagina web
          futuros cambios para la pagina
      -->
  <article>
    <section>
      lorenskdfbdjbhf<br>
      swkdfjgdskjfgksjdgf<br>
      sdkjfgsdkjfg<br>
      lorenskdfbdjbhf<br>
      swkdfjgdskjfgksjdgf<br>
      sdkjfgsdkjfg<br>
      lorenskdfbdjbhf<br>
      swkdfjgdskjfgksjdgf<br>
      sdkjfgsdkjfg<br>
      lorenskdfbdjbhf<br>
      swkdfjgdskjfgksjdgf<br>
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
            Facebook
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