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
            <?php @session_start(); echo $_SESSION['usuarioactua']; ?>
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
      
    </div>
  </nav>

  <ul id="dropdown1" class="dropdown-content">
  <li><a href="perfil.php">Ver tu perfil</a></li>
    <li class="divider"></li>
    <li><a href="perfil.php">Editar perfil</a></li>
    <li class="divider"></li> 
    <li><a href="salir.php">Salir</a></li>
  </ul>

  <div class="row">
    <div class="col s2" >
      </div>
    <div class="slider col s12 xl8">
      <ul class="slides">
        <li>
          <img src="imagenes/carr1.png"> <!-- random image -->
          <div class="caption center-align">
            <h3>Salidas de la ciudad de Puerto Escondido</h3>
            <h5 class="light grey-text text-lighten-3">A la ciudad de Oaxaca</h5>
          </div>
        </li>
        <li>
          <img src="imagenes/carr2.png"> <!-- random image -->
          <div class="caption left-align">
            <h3>Salidas de la ciudad de Oaxaca</h3>
            <h5 class="light grey-text text-lighten-3">A la ciudad de Puerto escondido</h5>
          </div>
        </li>
        <li>
          <img src="imagenes/carr3.png"> <!-- random image -->
          <div class="caption right-align">
            <h3>Somos transpotes de la costa</h3>
            <h5 class="light grey-text text-lighten-3">Tu mejor opción</h5>
          </div>
        </li>
        <li>
          <img src="imagenes/carr4.png"> <!-- random image -->
          <div class="caption center-align">
            <h3>Contamos con las mejores urvans</h3>
            <h5 class="light grey-text text-lighten-3">Y con conductores altamente capacitados</h5>
          </div>
        </li>
      </ul>
    </div>
    <div class="col s2" >
      
    </div>
        
    </div>



    <!-- para mostrar al usuario unos descuentos -->
    <div class="row">
      <div class="col s12 l5"> 
        <img class="responsive-img" src="imagenes/DESC00.png ">
      </div>

      <div class="col s12 l7"> 
      <img class="responsive-img" src="imagenes/DESC1.png ">
    </div>
    <!-- ------------------------------------------------------------ -->
    <div class="row">
      <div class="col s12 xl12">
        <h3 class="center-align">Atractivos turísticos</h3>
      </div>
    </div>

      <!-- Navbar goes here -->

      <!-- Page Layout here -->
      <div class="row">
        <div class="col s6 xl3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="imagenes/card1.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Puerto Escondido<i class="material-icons right">more_vert</i></span>
              <p><a href="https://es.wikipedia.org/wiki/Puerto_Escondido_(Oaxaca)" target="_blank">Ver mas</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Puerto Escondido<i class="material-icons right">close</i></span>
              <p>Una de las cosas que hay que hacer en Puerto Escondido es caminar por el Adoquín, la primera calle pavimentada del destino, llamada Pérez Gasca.
              </p>
              <p>Ir de playa en playa también es otra de las actividades favoritas al viajar a Puerto Escondido. Mazunte con sus campamentos tortugueros abiertos casi todo el año y playa hermana, Zipolite. Seguramente sabrás que esta es la única playa nudista de México.
              </p>
              <p>Muy cerca de Puerto Escondido se encuentra la Laguna de Manialtepec y las Lagunas de Chacahua. El tour más popular se realiza de noche para apreciar el fenómeno de la bioluminiscencia.
              </p>
            </div>
          </div>
        </div>
        <div class="col s6 xl3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="imagenes/card2.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Villa Sola de Vega<i class="material-icons right">more_vert</i></span>
              <p><a href="https://en.wikipedia.org/wiki/Villa_Sola_de_Vega" target="_blank">Ver mas</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Villa Sola de Vega<i class="material-icons right">close</i></span>
              <p>Se escucha música de banda.
              </p>
              <p>Se elaboran ollas de barro, comal; blusas y huipiles, así como diferentes piezas de alfarería.
              </p>
              <p>Los platillos típicos de este municipio son: mole negro y rojo, caldo de huevo, tamales de mole, cerdo a la zapoteca, tortillas y totopo de maíz, marquesote y pinole.
              </p>
              <p>
                Dentro de las bebidas que se acostumbran se encuentra el tejate elaborado con huesos tostados de mamey, maíz desquebrajado, cacao y la flor de cacao. Así como el tepache, agua ardiente, mezcal y el tradicional chocolate de agua y de leche.
              </p>
            </div>
          </div>
        </div>
        <div class="col s6 xl3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="imagenes/card3.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">San Sebastián de la Grutas<i class="material-icons right">more_vert</i></span>
              <p><a href="https://oaxaca.eluniversal.com.mx/turismo/19-12-2019/san-sebastian-de-las-grutas-cenote-bajo-suelo-de-oaxaca" target="_blank">Ver mas</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">San Sebastián de la Grutas<i class="material-icons right">close</i></span>
              <p>San Sebastián de las Grutas es un centro ecoturístico que pertenece al grupo étnico zapoteco. Conservamos usos y costumbres de antepasados: honradez, trabajo, respeto a la vida humana, familia y naturaleza, amor a la educación, la Guelaguetza y la práctica del tequio, aspectos que demuestran el espíritu de organización a favor de la comunidad. Disfruta del espectáculo único de grutas y formaciones rocosas, adéntrate a la historia de la comunidad con las tumbas prehispánicas, y conoce el tradicional tallado de madera, tejido de petate y elaboración del mezcal.</p>
            </div>
          </div>
        </div>
        <div class="col s6 xl3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="imagenes/card4.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Ciudad de Oaxaca<i class="material-icons right">more_vert</i></span>
              <p><a href="https://es.wikipedia.org/wiki/Oaxaca" target="_blank">Ver mas</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Ciudad de Oaxaca<i class="material-icons right">close</i></span>
              <p>Algunos de los lugares turisticos de la ciudad de oaxaca son:</p>
              <p>Exconvento de Santo Domingo</p>
              <p>Hierve el Agua</p>
              <p>Monte Albán</p>
              <p>Centro Cultural San Pablo</p>
              <p>Museo Textil de Oaxaca</p>
              <p>Mercados</p>
              <p>Museo del Palacio UNIVERSUM</p>
              <p>La Guelaguetza</p>
              <p>Basílica de la Virgen de la Soledad</p>
            </div>
          </div>
        </div>
      </div>

          <!-- para mostrar información extra-->
    <div class="row">
      <div class="col s12 l5"> 
          <h3 class="center-align">Viaja sin límites con Transportes de la costa.</h3>
      </div>

      <div class="col s12 l7  "> 
      <p> 
      Viajamos contigo en nuestras líneas de urvans para llevarte hasta donde deseas estar, saliendo desde Ciudad de Puerto Escondio y Oaxaca
      </p><p>
      Vivimos contigo día a día la alegría de encontrarte con los que más quieres, viajando con las mejores promociones para obtener tus boletos de urvans y disfrutes en destinos como Puerto escondido, Juchatengo, Villa Sola de Vega, Oaxaca etc...
      </p><p>
      Mejoramos la experiencia de viajar en urvans, ofreciéndote el mayor confort en cada recorrido.
      </p><p>
      Estamos convencidos de que los mejores momentos comienzan aquí, por esta razón, comprar tu boleto de urvan ahora es más fácil en nuestro sitio oficia</p>
      </div>
    </div>
    <!-- ------------------------------------------------------------ -->
    <br>


  <!--footer, información de la pagína web-->
  <footer class="page-footer light-blue darken-4"  >
    <div class="container ">
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
          <p class="grey-text text-lighten-4" >
          <a class="grey-text text-lighten-3" href="https://www.facebook.com/TDC-102310959199125">
          <img src="imagenes/facebook.PNG">
            Facebook
          </a>
          </p>
          <p>
          <a class="grey-text text-lighten-3" href="https://www.youtube.com/">
          <img src="imagenes/youtube.PNG">
            YouTube
            </a>
            </p>
            <p>
          <a class="grey-text text-lighten-3" href="https://www.instagram.com/">
          <img src="imagenes/instagram.PNG">
            Instagram
            </a>
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