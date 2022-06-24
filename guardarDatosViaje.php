<?php

$idUrvan = $_POST['idUrvan'];

//$consulta_query = mysqli_query($conexion, "INSERT INTO compra VALUES (3,0,$idUrvan,1,100.0,'1 hora','23/06/22','1:16 a.m')") or die("No se pudo realizar la consulta");

?>
<?php

echo "
        <div class='row'>
          <h5>Seleccione su asiento</h5>
        </div>
        ";

$asiento1;
$asiento2;
$asiento3;
$asiento4;
$asiento5;
$asiento6;
$asiento7;
$asiento8;
$asiento9;
$asiento10;
$asiento11;
$asiento12;
$asiento12;
$asiento14;

include("conexion_bd.php");

//$consulta_idUrvan = mysqli_query($conexion,"SELECT c_id_urvan WHERE");
//include("comprarBoleto.php");

$consulta_query = mysqli_query($conexion, "SELECT * FROM urvan WHERE c_id_urvan = $idUrvan") or die("No se pudo realizar la consulta");
if (mysqli_num_rows($consulta_query) > 0) {
  while ($fila = mysqli_fetch_array($consulta_query)) {
    $asiento1 = $fila['c_asiento_1'];
    $asiento2 = $fila['c_asiento_2'];
    $asiento3 = $fila['c_asiento_3'];
    $asiento4 = $fila['c_asiento_4'];
    $asiento5 = $fila['c_asiento_5'];
    $asiento6 = $fila['c_asiento_6'];
    $asiento7 = $fila['c_asiento_7'];
    $asiento8 = $fila['c_asiento_8'];
    $asiento9 = $fila['c_asiento_9'];
    $asiento10 = $fila['c_asiento_10'];
    $asiento11 = $fila['c_asiento_11'];
    $asiento12 = $fila['c_asiento_12'];
    $asiento13 = $fila['c_asiento_13'];
    $asiento14 = $fila['c_asiento_14'];
  }
}
mysqli_free_result($consulta_query);
mysqli_close($conexion);
?>
<div class="row">

  <div class="col s1 m1 l2" id="ejemplo">
    <span>
      <img src="<?php
                if ($asiento1 == 0) {
                  echo "imagenes/Asientolibre.png";
                } elseif ($asiento1 == 1) {
                  echo "imagenes/Asientoocupado.png";
                } ?>" id="img1" style="width:30px; height:30px; cursor:pointer;">
    </span>
  </div>

  <div class="col s1 m1 l2">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento2 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento2 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img2" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento3 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento3 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img3" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento4 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento4 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img4" style="width:30px; height:30px; cursor:pointer;">
  </div>

  <!--<img src="imagenes/Asientolibre.png" style="width:30px; height:30px;">-->
</div>

<div class="row">

  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento5 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento5 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img5" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">

  </div>
  <div class="col s1 m1 l2">

  </div>
  <div class="col s1 m1 l2">

  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento6 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento6 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img6" style="width:30px; height:30px; cursor:pointer;">

  </div>
  <!--<img src="imagenes/Asientolibre.png" style="width:30px; height:30px;">-->
</div>

<div class="row">

  <div class="col s1 m1 l2">

  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento7 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento7 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img7" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento8 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento8 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img8" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento9 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento9 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img9" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento10 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento10 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img10" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <!--<img src="imagenes/Asientolibre.png" style="width:30px; height:30px;">-->
</div>

<div class="row">

  <div class="col s1 m1 l2">
    <img src="imagenes/volante.png" style="width:30px; height:30px;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento11 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento11 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img11" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento12 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento12 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img12" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento13 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento13 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img13" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <div class="col s1 m1 l2">
    <img src="<?php
              if ($asiento14 == 0) {
                echo "imagenes/Asientolibre.png";
              } elseif ($asiento14 == 1) {
                echo "imagenes/Asientoocupado.png";
              } ?>" id="img14" style="width:30px; height:30px; cursor:pointer;">
  </div>
  <!--<img src="imagenes/Asientolibre.png" style="width:30px; height:30px;">-->
</div>

<div class="row">Simbologia</div>

<div class="row">
  <div class="col l3"></div>
  <div class="col l2">
    <img src="imagenes/Asientolibre.png" alt="" style="width:30px; height:30px;">
    <p>Asiento disponible</p>
  </div>
  <div class="col l2">
    <img src="imagenes/Asientoocupado.png" alt="" style="width:30px; height:30px;">
    <p>Asiento ocupado</p>
  </div>
  <div class="col l2">
    <img src="imagenes/Asientoseleccionado.png" alt="" style="width:30px; height:30px;">
    <p>Asiento seleccionado</p>
  </div>
  <div class="col l3"></div>
</div>


<div class="row center">
  <button class="btn waves-light black-text" id="enviar" type="button" name="action">Comprar</button>
</div>
</section>

<section>
  <div class="row">
    <div id="respuesta"></div>
  </div>
</section>

</article>


<!--opciones de menú "hamburguesa responsive"-->
<ul class="sidenav" id="menu-responsive">
  <li><a href="">Viajes</a></li>
  <li><a href="">Perfil</a></li>
  <li><a href="">Ayuda</a></li>
  <li><a href="index.php">Salir</a></li>
</ul>

<script>
  var numAsiento = 0;

  var disponibleUno = true;
  var imagenUno = document.getElementById('img1');

  var disponibleDos = true;
  var imagenDos = document.getElementById('img2');

  var disponible3 = true;
  var imagen3 = document.getElementById('img3');

  var disponible4 = true;
  var imagen4 = document.getElementById('img4');

  var disponible5 = true;
  var imagen5 = document.getElementById('img5');

  var disponible6 = true;
  var imagen6 = document.getElementById('img6');

  var disponible7 = true;
  var imagen7 = document.getElementById('img7');

  var disponible8 = true;
  var imagen8 = document.getElementById('img8');

  var disponible9 = true;
  var imagen9 = document.getElementById('img9');

  var disponible10 = true;
  var imagen10 = document.getElementById('img10');

  var disponible11 = true;
  var imagen11 = document.getElementById('img11');

  var disponible12 = true;
  var imagen12 = document.getElementById('img12');

  var disponible13 = true;
  var imagen13 = document.getElementById('img13');

  var disponible14 = true;
  var imagen14 = document.getElementById('img14');

  imagenUno.onclick = cambiarImagenjQ;
  imagenDos.onclick = cambiarImagenJQ2;
  imagen3.onclick = cambiarImagenJQ3;
  imagen4.onclick = cambiarImagenJQ4;
  imagen5.onclick = cambiarImagenJQ5;
  imagen6.onclick = cambiarImagenJQ6;
  imagen7.onclick = cambiarImagenJQ7;
  imagen8.onclick = cambiarImagenJQ8;
  imagen9.onclick = cambiarImagenJQ9;
  imagen10.onclick = cambiarImagenJQ10;
  imagen11.onclick = cambiarImagenJQ11;
  imagen12.onclick = cambiarImagenJQ12;
  imagen13.onclick = cambiarImagenJQ13;
  imagen14.onclick = cambiarImagenJQ14;

  function cambiarImagenjQ() {
    <?php
    if ($asiento1 == 0) {
    ?>
      if (disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponibleUno) {
          $("#img1").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 1;
          disponibleUno = false;
        } else {
          $("#img1").attr("src", "imagenes/Asientolibre.png");
          numAsiento = 0;
          disponibleUno = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ2() {
    <?php
    if ($asiento2 == 0) {
    ?>
      if (disponibleUno && disponible3 && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponibleDos) {
          $("#img2").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 2;
          disponibleDos = false;
        } else {
          $("#img2").attr("src", "imagenes/Asientolibre.png");
          disponibleDos = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ3() {
    <?php
    if ($asiento3 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible3) {
          $("#img3").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 3;
          disponible3 = false;
        } else {
          $("#img3").attr("src", "imagenes/Asientolibre.png");
          disponible3 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ4() {
    <?php
    if ($asiento4 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible4) {
          $("#img4").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 4;
          disponible4 = false;
        } else {
          $("#img4").attr("src", "imagenes/Asientolibre.png");
          disponible4 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ5() {
    <?php
    if ($asiento5 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible5) {
          $("#img5").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 5;
          disponible5 = false;
        } else {
          $("#img5").attr("src", "imagenes/Asientolibre.png");
          disponible5 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ6() {
    <?php
    if ($asiento6 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible6) {
          $("#img6").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 6;
          disponible6 = false;
        } else {
          $("#img6").attr("src", "imagenes/Asientolibre.png");
          disponible6 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ7() {
    <?php
    if ($asiento7 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible7) {
          $("#img7").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 7;
          disponible7 = false;
        } else {
          $("#img7").attr("src", "imagenes/Asientolibre.png");
          disponible7 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ8() {
    <?php
    if ($asiento8 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible8) {
          $("#img8").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 8;
          disponible8 = false;
        } else {
          $("#img8").attr("src", "imagenes/Asientolibre.png");
          disponible8 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ9() {
    <?php
    if ($asiento9 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible10 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible9) {
          $("#img9").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 9;
          disponible9 = false;
        } else {
          $("#img9").attr("src", "imagenes/Asientolibre.png");
          disponible9 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ10() {
    <?php
    if ($asiento10 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible11 && disponible12 && disponible13 && disponible14) {
        if (disponible10) {
          $("#img10").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 10;
          disponible10 = false;
        } else {
          $("#img10").attr("src", "imagenes/Asientolibre.png");
          disponible10 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ11() {
    <?php
    if ($asiento11 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible12 && disponible13 && disponible14) {
        if (disponible11) {
          $("#img11").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 11;
          disponible11 = false;
        } else {
          $("#img11").attr("src", "imagenes/Asientolibre.png");
          disponible11 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ12() {
    <?php
    if ($asiento12 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible13 && disponible14) {
        if (disponible12) {
          $("#img12").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 12;
          disponible12 = false;
        } else {
          $("#img12").attr("src", "imagenes/Asientolibre.png");
          disponible12 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ13() {
    <?php
    if ($asiento13 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible14) {
        if (disponible13) {
          $("#img13").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 13;
          disponible13 = false;
        } else {
          $("#img13").attr("src", "imagenes/Asientolibre.png");
          disponible13 = true;
        }
      }
    <?php
    }
    ?>
  }

  function cambiarImagenJQ14() {
    <?php
    if ($asiento14 == 0) {
    ?>
      if (disponibleUno && disponibleDos && disponible3 && disponible4 && disponible5 && disponible6 && disponible7 && disponible8 && disponible9 && disponible10 && disponible11 && disponible12 && disponible13) {
        if (disponible14) {
          $("#img14").attr("src", "imagenes/Asientoseleccionado.png");
          numAsiento = 14;
          disponible14 = false;
        } else {
          $("#img14").attr("src", "imagenes/Asientolibre.png");
          disponible14 = true;
        }
      }
    <?php
    }
    ?>
  }

  <?php
  echo "var botonEnviar = document.getElementById('enviar');
    botonEnviar.onclick = pasarjAax;

    function pasarjAax() {
      var asiento = numAsiento;
      var ruta = 'Asiento=' + asiento + '&idUrvan=$idUrvan';
      $.ajax({
        url: 'procesoCompra.php',
        type: 'POST',
        data: ruta
      }).done(function(res) {
        $('#respuesta').html(res)
      }).fail(function() {
        console.log('Error');
      }).always(function() {
        console.log('complete');
      });
    }";
  ?>
</script>