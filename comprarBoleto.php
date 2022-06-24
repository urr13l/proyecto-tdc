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
      <div class="container">
        <div class="row center">
          <h5>A punto de comprar el boleto...</h5>
          <h6>Ingrese sus datos bancarios</h6>
        </div>
        <div class="row">
          <div class="col s3 m3 l3"></div>
          <form class="col s6 m6 l6" action="" method="POST">

            <div class="row">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input id="titularTarjeta" type="text" class="validate" name="titularTarjeta" autofocus required />
                <label for="titularTarjeta">Nombre del titular de la tarjeta</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input id="numTarjeta" type="text" class="validate" name="numTarjeta" required />
                <label for="numTarjeta">Número de la tarjeta</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input id="cvvTarjeta" type="number" class="validate" name="cvvTarjeta" required />
                <label for="cvvTarjeta">Codigo de seguridad de la tarjeta</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input id="fvTarjeta" type="text" class="validate" name="fvTarjeta" required />
                <label for="fvTarjeta">Fecha de vencimiento de la tarjeta</label>
              </div>
            </div>

            <div class="row center">
              <button class="btn waves-effect" type="submit" name="actionTarjeta" id="botonComprarTarjeta">
                Comprar
              </button>
            </div>

          </form>
          <div class="col s3 m3 l3"></div>
        </div>
      </div>
    </section>
  </article>

  <?php
    if (isset($_POST['actionTarjeta'])) {
      $nombreTitular = $_POST['titularTarjeta'];
      $numTarjeta = $_POST['numTarjeta'];
      $cvvTarjeta = $_POST['cvvTarjeta'];
      $fechavenTarjeta = $_POST['fvTarjeta'];

      include("conexion_bd.php");

      $resultado_query = mysqli_query($conexion, "INSERT INTO datos_bancarios VALUES (null, '$fechavenTarjeta', $cvvTarjeta, '$nombreTitular', '$numTarjeta')") or die("No se pudieron insertar los datos");
      mysqli_close($conexion);
      echo "<script>alert('Compra exitosa');
          window.location.href = \"perfilSesion.php\"</script>";  
    }    
  ?>



  <script type="text/javascript" src="js/inicializaciones.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

</body>

</html>