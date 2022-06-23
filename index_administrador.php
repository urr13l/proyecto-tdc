<?php
  include("seguridad.php");
  function obtenerConductoresPuerto(){
    include("conexion_bd.php");
    $query_consulta = "SELECT conductor.c_nombre FROM conductor inner join urvan on conductor.id_urvan = urvan.c_id_urvan 
    WHERE  c_origen = 'Puerto Escondido'";
    $procesa_query = mysqli_query($conexion, $query_consulta);
    $nombres = array();
    $cont = 0;
    while($row = mysqli_fetch_array($procesa_query)){
      $nombres[$cont] = $row ['c_nombre'];
      $cont++;
    }
    foreach ($nombres as $valor) {
      echo "<option value = '$valor' >$valor $puerto</option>";
    }
    mysqli_close($conexion);
  }
  function obtenerConductoresOaxaca(){
    include("conexion_bd.php");
    $query_consulta = "SELECT conductor.c_nombre FROM conductor inner join urvan on conductor.id_urvan = urvan.c_id_urvan 
    WHERE  urvan.c_origen = 'Oaxaca'";
    $procesa_query = mysqli_query($conexion, $query_consulta);
    $nombres = array();
    $cont = 0;
    while($row = mysqli_fetch_array($procesa_query)){
      $nombres[$cont] = $row ['c_nombre'];
      $cont++;
    }
    foreach ($nombres as $valor) {
      echo "<option value = '$valor' >$valor </option>";
    }
    mysqli_close($conexion);
  }
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
  <script type="text/javascript" src = "js/jquery-3.6.0.min.js"></script>
</head>

<!--opciones de menú "hamburguesa responsive"-->
<ul class="sidenav" id="menu-responsive">
  <!-- <li><a class='dropdown-trigger btn' href='#' data-target='dropdown6'>Viajes</a></li> -->
  <li><a href="">Viajes </a></li>
  <li><a href="">Urvan </a></li>
  <li><a href="">Conductor</a></li>
  <li><a href="">Administrador</a></li>
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
            <?php @session_start(); echo $_SESSION['usuarioactua'];?>
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

  <ul id="dropdown2" class="dropdown-content">
    <li><a id = "mostrarHorario">Pto. Escondido</a></li>
    <li class="divider"></li>
    <li><a id = "mostrarHorario1">Oaxaca</a></li>
  </ul>

  <ul id="dropdown3" class="dropdown-content">
    <li><a href="#">Disponibilidad</a></li>
  </ul>

  <ul id="dropdown4" class="dropdown-content">
    <li><a href="#">Nuevo</a></li>
    <li class="divider"></li>
    <li><a href="#">Baja</a></li>
    <li class="divider"></li>
    <li><a href="#">Actualizar</a></li>
  </ul>

  <ul id="dropdown5" class="dropdown-content">
    <li><a href="#modal2" class="modal-trigger">Nuevo</a></li>
    <li class="divider"></li>
    <li><a href="#">Baja</a></li>
    <li class="divider"></li>
    <li><a href="#">Actualizar</a></li>
  </ul>

  <div id="modal2" class="modal">
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

  <div id="horarios" hidden>
    <div class="row">
      <form class="col s12" action="procesa_horarios.php" method="POST">

        <div class="col s2">
        </div>

        <div class="col s8">
        <table class="centered" >
          <thead>
            <tr>
              <th>Hora de salidas</th>
              <th>Conductor e identificador de la urban</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>3:30 am</td>
              <td>
                <div class="col s3"></div>
                <div class="input-field col s6">
                  <select name = "conductor1" >
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>4:30 am</td>
              <td>
                <div class="col s3"></div>
                <div class="input-field col s6">
                  <select name = "conductor2">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>          
            </tr>
            <tr>
              <td>5:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor3">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>        
            </tr>
            <tr>
              <td>6:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor4">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>             
            </tr>
            <tr>
              <td>7:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor5">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>8:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor6">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>9:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor7">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>             
            </tr>
            <tr>
              <td>10:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor8">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>11:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor9">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>12:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor10">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>13:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor11">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>14:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor12">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>15:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor13">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>16:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor14">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>17:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor15">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>18:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor16">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>19:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor17">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>20:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor18">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>21:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor19">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>22:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor20">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>23:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor21" >
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresPuerto(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
        
        </div>
          <div class="row">
          </div>
          <div class="col s12">
            <center><input type="submit" id = "ocultarHorario" name = "btn_horarios" value = "Asignar horarios" class="btn waves-effect waves-light" onclick = ></center>
          </div>
      </form>

      <div class="col s2"></div>

    </div>
  </div>

  <div id="horarios2" hidden>
    <div class="row">
      <form class="col s12" action="procesa_horarios.php" method="POST">

        <div class="col s2">
        </div>

        <div class="col s8">
        <table class="centered" >
          <thead>
            <tr>
              <th>Hora de salidas</th>
              <th>Conductor e identificador de la urban</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>3:30 am</td>
              <td>
                <div class="col s3"></div>
                <div class="input-field col s6">
                  <select name = "conductor1" >
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>4:30 am</td>
              <td>
                <div class="col s3"></div>
                <div class="input-field col s6">
                  <select name = "conductor2">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>          
            </tr>
            <tr>
              <td>5:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor3">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>        
            </tr>
            <tr>
              <td>6:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor4">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>             
            </tr>
            <tr>
              <td>7:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor5">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>8:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor6">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>9:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor7">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                    obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>             
            </tr>
            <tr>
              <td>10:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor8">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>11:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor9">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>12:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor10">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>13:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor11">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>14:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor12">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>15:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor13">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>16:30 pm</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor14">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>17:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor15">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>              
            </tr>
            <tr>
              <td>18:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor16">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>19:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor17">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>20:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor18">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                     obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>21:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor19">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca()
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>22:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor20">
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca(); 
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>23:30 am</td>
              <td>
                <div class="col s3">
                </div>
                <div class="input-field col s6">
                  <select name = "conductor21" >
                    <option value="" selected>Elija a un conductor</option>
                    <?php
                      obtenerConductoresOaxaca();
                    ?>
                  </select>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
        
        </div>
          <div class="row">
          </div>
          <div class="col s12">
            <center><input type="submit" id = "ocultarHorario2" name = "btn_horarios2" value = "Asignar horarios" class="btn waves-effect waves-light"></center>
          </div>
      </form>

      <div class="col s2"></div>

    </div>
  </div>

  

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
  <script type="text/javascript">
    $(document).ready(function(){
      $("#mostrarHorario").click(function(){
        $("#horarios").show();
        $("#horarios2").hide();
      });
    });

    $(document).ready(function(){
      $("#mostrarHorario1").click(function(){
        $("#horarios2").show();
        $("#horarios").hide();
      });
    });

    $(document).ready(function(){
      $("#ocultarHorario").click(function(){
        $("#horarios").hide();
      });
    });
    $(document).ready(function(){
      $("#ocultarHorario2").click(function(){
        $("#horarios2").hide();
      });
    });
  </script>
</body>
</html>