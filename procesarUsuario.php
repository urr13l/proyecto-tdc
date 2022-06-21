<?php
include("conexion_bd.php");

if (isset($_POST["actionRegistro"])) {
  $usuarioRegistro = $_POST['usuarioRegistro'];
  $nombreRegistro = $_POST['nombreRegistro'];
  $telefonoRegistro = $_POST['telefonoRegistro'];
  $passwordRegistro = $_POST['passwordRegistro'];

  //md5(htmlentities)

  $consulta_query = mysqli_query($conexion, "SELECT c_usuario FROM cliente WHERE c_usuario = '$usuarioRegistro'") or die("No se pudo realizar la consulta");
  $buscar_query = mysqli_num_rows($consulta_query);

  if ($buscar_query != 0) {
    //quedarse en el modal -correo existente
    mysqli_close($conexion);
    echo "<script>alert('Usuario existente');
                window.location.href = \"index.php\"</script>";
  } else {
    //hacer sesión y mandar a la pagina con sesión iniciada
    $resultado_query = mysqli_query($conexion, "INSERT INTO cliente (c_id_usuario, c_usuario, c_nombre, c_contrasenia, c_telefono, c_id_tarjeta) VALUES (NULL, '$usuarioRegistro', '$nombreRegistro', '$passwordRegistro', '$telefonoRegistro', NULL)") or die("No se pudieron insertar los datos");


    mysqli_close($conexion);
    session_start();
    $_SESSION['autentica'] = 'SIP';
    $_SESSION['usuarioactua'] = $usuarioInicio;
    header("location:perfilSesion.php");
    echo "<script>alert('Usuario registrado');
          window.location.href = \"perfilSesion.php\"</script>";    
  }
}

if (isset($_POST["actionInicio"])) {
  $usuarioInicio = $_POST["usuarioInicio"];
  $contraInicio = $_POST["passwordInicio"];

  $consulta_query = mysqli_query($conexion, "SELECT c_usuario FROM cliente WHERE c_usuario = '$usuarioInicio'") or die("No se pudo realizar la consulta");
  $buscar_query = mysqli_num_rows($consulta_query);
  $consulta_administrador = mysqli_query($conexion, "SELECT c_usuario FROM administrador WHERE c_usuario = '$usuarioInicio'") or die("No se pudo realizar la consulta");
  $buscar_administrador = mysqli_num_rows($consulta_administrador);
  if ($buscar_query != 0) {
    $consulta_contra_query = mysqli_query($conexion, "SELECT c_usuario FROM cliente WHERE c_contrasenia = '$contraInicio'") or die("No se pudo realizar la consulta");
    $buscar_contra = mysqli_num_rows($consulta_contra_query);
    if ($buscar_contra != 0) {
      mysqli_close($conexion);
      session_start();
      $_SESSION['autentica'] = 'SI';
      $_SESSION['usuarioactua'] = $usuarioInicio;
      // header("location:perfilSesion.php");
      echo "<script>
                window.location.href = \"perfilSesion.php\"</script>";
    } else {
      mysqli_close($conexion);
      echo "<script>alert('Usuario o contraseña no validos');
                    window.location.href = \"index.php\"</script>";
    }
  } else if($buscar_administrador != 0){
    $consulta_contra_query = mysqli_query($conexion, "SELECT c_usuario FROM administrador WHERE c_contrasenia = '$contraInicio'") or die("No se pudo realizar la consulta");
    $buscar_contra = mysqli_num_rows($consulta_contra_query);
    if ($buscar_contra != 0) {
      mysqli_close($conexion);
      session_start();
      $_SESSION['autentica'] = 'SI';
      $_SESSION['usuarioactua'] = $usuarioInicio;
    
    echo "<script>
              window.location.href = \"index_administrador.php\"</script>";
    } else {
      mysqli_close($conexion);
      echo "<script>alert('Usuario o contraseña no validos');
                    window.location.href = \"index.php\"</script>";
    }
  }else {
    mysqli_close($conexion);
    echo "<script>alert('Usuario no registrado');
                  window.location.href = \"index.php\"</script>";
  }
}
?>