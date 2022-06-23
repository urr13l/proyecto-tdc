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

  <article>
    <div class="row"></div>
    <section>

      <div class="row">

        <div class="col s8 m8 l8">

          <h4 class="center">Horario y precios de ida</h4>

          <div class="row">
            <div class="col s3 m3 l3"></div>
            <div class="col s9 m9 l6">
              <div class="card-panel light-blue accent-1 hoverable center-align">
                <span class="black-text ">
                  PUERTO ESCONDIDO - HUATULCO
                </span>
                <br>
                <p>Salida: 5:00 A.M.</p>
                <br>
                <button onclick="window.location.href = 'seleccionarAsiento.php'" class="btn waves-light black-text" type="button" name="action">Comprar
                </button>
              </div>
            </div>
            <div class="col s3 m3 l3"></div>
          </div>

          <div class="row">
            <div class="col s3 m3 l3"></div>
            <div class="col s9 m9 l6">
              <div class="card-panel light-blue accent-1 hoverable center-align">
                <span class="black-text ">
                  PUERTO ESCONDIDO - HUATULCO
                </span>
                <br>
                <p>Salida: 9:00 A.M.</p>
                <br>
                <button onclick="window.location.href = 'seleccionarAsiento.php'" class="btn waves-light black-text" type="button" name="action">Comprar
                </button>
              </div>
            </div>
            <div class="col s3 m3 l3"></div>
          </div>

          <div class="row">
            <div class="col s3 m3 l3"></div>
            <div class="col s9 m9 l6">
              <div class="card-panel light-blue accent-1 hoverable center-align">
                <span class="black-text ">
                  PUERTO ESCONDIDO - HUATULCO
                </span>
                <br>
                <p>Salida: 12:00 A.M.</p>
                <br>
                <button onclick="window.location.href = 'seleccionarAsiento.php'" class="btn waves-light black-text" type="button" name="action">Comprar
                </button>
              </div>
            </div>
            <div class="col s3 m3 l3"></div>
          </div>

          <div class="row">
            <div class="col s3 m3 l3"></div>
            <div class="col s9 m9 l6">
              <div class="card-panel light-blue accent-1 hoverable center-align">
                <span class="black-text ">
                  PUERTO ESCONDIDO - HUATULCO
                </span>
                <br>
                <p>Salida: 1:00 A.M.</p>
                <br>
                <button onclick="window.location.href = 'seleccionarAsiento.php'" class="btn waves-light black-text" type="button" name="action">Comprar
                </button>
              </div>
            </div>
            <div class="col s3 m3 l3"></div>
          </div>

        </div>


        <div class="col s4 m4 l4">
          <br>
          <h6 class="center">Boleto a puerto escondido</h6>

          <div class="row">
            <div class="col s12 m12 l12">

            </div>
          </div>
        </div>

      </div>

    </section>
    <div class="row"></div>
  </article>




  <!--opciones de menú "hamburguesa responsive"-->
  <ul class="sidenav" id="menu-responsive">
    <li><a href="">Viajes</a></li>
    <li><a href="">Perfil</a></li>
    <li><a href="">Ayuda</a></li>
    <li><a href="index.php">Salir</a></li>
  </ul>


  <script type="text/javascript" src="js/inicializaciones.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>