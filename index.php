<!DOCTYPE html>
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

<!--contenido de modal inicio sesión-->
<div id="modalInicio" class="modal">
  <div class="modal-header right">
    <i class="small material-icons modal-close">close</i>
  </div>
  <div class="modal-content">
    <h5 class="center">INICIA SESIÓN</h5>


    <div class="row">
      <form class="col s12" action="procesarUsuario.php" method="POST">

        <div class="row">
          <div class="col s12 m4 l4"></div>
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">account_circle</i>
            <input id="usuarioInicio" type="text" class="validate" name="usuarioInicio" autofocus required />
            <label for="usuarioInicio">Nombre de usuario</label>
          </div>
          <div class="col s12 m4 l4"></div>
        </div>

        <div class="row">
          <div class="col s12 m4 l4"></div>
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">password</i>
            <input id="password" type="password" class="validate" name="passwordInicio" required />
            <label for="password">Contraseña</label>
          </div>
          <div class="col s12 m4 l4"></div>
        </div>

        <div class="row center">
          <button class="btn waves-effect waves-light" type="submit" name="actionInicio">
            INICIAR SESIÓN
          </button>
          <div class="row center">
            <h9>¿Deseas registrarte?</h9>
            <a  href="#modalRegistro" class="waves-effect waves-light modal-trigger modal-close">Hazlo aquí</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
/*echo "<script type='text/javascript'>
var button = document.getElementById('inicioS');
button.onclick = function(){
  alert('Presionado');
} 
</script>";*/
?>

<!--contenido de modal registrate-->
<div id="modalRegistro" class="modal">
  <div class="modal-header right">
    <i class="small material-icons modal-close">close</i>
  </div>
  <div class="modal-content">
    <h5 class="center">REGÍSTRATE</h5>

    <div class="row">
      <form class="col s12" action="procesarUsuario.php" method="POST">

          <div class="row center">
            <div class="col s12 m4 l2"></div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">account_circle</i>
              <input id="usuarioRegistro" type="text" class="validate" name="usuarioRegistro" autofocus required />
              <label for="usuarioRegistro">Nombre de usuario</label>
            </div>

            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">account_circle</i>
              <input id="nombreRegistro" type="text" class="validate" name="nombreRegistro" required />
              <label for="nombreRegistro">Nombre completo</label>
            </div>
            <div class="col s12 m4 l2"></div>
          </div>

          <div class="row center">
            <div class="col s12 m4 l2"></div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">account_circle</i>
              <input id="telefonoRegistro" type="text" class="validate" name="telefonoRegistro" required />
              <label for="telefonoRegistro">Telefono</label>
            </div>

            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">password</i>
              <input id="passwordR" type="password" class="validate" name="passwordRegistro" required />
              <label for="passwordR">Contraseña</label>
            </div>
            <div class="col s12 m4 l2"></div>
          </div>      

        <div class="row center">
          <button class="btn waves-effect waves-light" type="submit" name="actionRegistro">
            CREAR MI CUENTA
          </button>
          <div class="row center">
            <h9>¿Ya tiene una cuenta?</h9>
            <a href="#modalInicio" class="waves-effect waves-light modal-trigger modal-close">Entra aquí</a>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>

<!--opciones de menú "hamburguesa responsive"-->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <!--<div class="background">
        <img src="images/office.jpg">
      </div>-->
      <a href="#user"><i class="material-icons">person</i></a>
      <a href="#name"><span class="black-text name">Usuario</span></a>
      <a href="#email"><span class="black-text email">ejemplo@correo.com</span></a>
    </div></li>
    <li><a href="#modalInicio" class="modal-trigger waves-effect"><i class="material-icons">airport_shuttle</i>Viajes</a></li>
    <li><a href="#modalRegistro" class="modal-trigger waves-effect"><i class="material-icons">add_circle_outline</i>Regístrarse</a></li>
    <li><a href="#modalInicio" class="modal-trigger waves-effect"><i class="material-icons">contact_mail</i>Iniciar sesión</a></li>
    <li><a href="" class="waves-effect"><i class="material-icons">help</i>Ayuda</a></li>

  </ul>

<body>
  <!--Menú (nav)-->
  <nav class="light-blue darken-4">
    <div class="nav-wrapper container">
      <a href="" class="brand-logo">
        <img src="imagenes/LOGO.png" height="58" class="" />
      </a>

      <!--Menú responsive-->
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <!--opciones del menúx-->
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="#modalInicio" class="modal-trigger">Viajes</a>
        </li>
        <li>
          <a href="#modalRegistro" class="modal-trigger">Regístrarse</a>
        </li>
        <li>
          <a href="#modalInicio" class="modal-trigger">Iniciar sesión</a>
        </li>
        <li>
          <a href="">Ayuda</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--Contenido principal de la pagina web
        futuros cambios para la pagina
    -->
  <article>
    <section>
      <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="imagenes/x1.png" /></a>
        <a class="carousel-item" href="#two!"><img src="imagenes/x2.jpg" /></a>
      </div>
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
