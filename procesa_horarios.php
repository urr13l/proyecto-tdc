<?php
    include("seguridad.php");
?>
<?php
    $horas = array("3:30",
        "4:30",
        "5:30",
        "6:30",
        "7:30",
        "8:30",
        "9:30",
        "10:30",
        "11:30",
        "12:30",
        "13:30",
        "14:30",
        "15:30",
        "16:30",
        "17:30",
        "18:30",
        "19:30",
        "20:30",
        "21:30",
        "22:30",
        "23:30");
    $conductores = array(
            $_POST['conductor1'],
            $_POST['conductor2'],
            $_POST['conductor3'],
            $_POST['conductor4'],
            $_POST['conductor5'],
            $_POST['conductor6'],
            $_POST['conductor7'],
            $_POST['conductor8'],
            $_POST['conductor9'],
            $_POST['conductor10'],
            $_POST['conductor11'],
            $_POST['conductor12'],
            $_POST['conductor13'],
            $_POST['conductor14'],
            $_POST['conductor15'],
            $_POST['conductor16'],
            $_POST['conductor17'],
            $_POST['conductor18'],
            $_POST['conductor19'],
            $_POST['conductor20'],
            $_POST['conductor21']
        );

    if(isset($_POST['btn_horarios'])){

                    
        include("conexion_bd.php");
        
        $cont = 0;
        foreach ($conductores as $valor) {
            if($conductores[$cont] != ""){
                $procesa_query = mysqli_query($conexion, "SELECT conductor.id_urvan FROM conductor WHERE c_nombre = '$conductores[$cont]'" ) or die("No se pudo realizar la consulta");
                $buscar_query = mysqli_num_rows($procesa_query); 
                if( $buscar_query != 0){
                    $row = mysqli_fetch_assoc($procesa_query);
                    $consulta1 = "UPDATE urvan SET c_hora_salida = '$horas[$cont]' WHERE c_id_urvan = ".$row['id_urvan'];
                    //$consulta2 = "UPDATE urvan SET c_origen = 'Oaxaca' WHERE c_id_urvan = ".$row['id_urvan'];
                    $consulta_actualizar1 = mysqli_query($conexion, $consulta1) or die("No se pudo realizar la consulta");
                    //$consulta_actualizar2 = mysqli_query($conexion, $consulta2) or die("No se pudo realizar la consulta");  
                }
            }
            $cont++;
        }
    } else if (isset($_POST['btn_horarios2'])){
        include("conexion_bd.php");
        
        $cont = 0;
        foreach ($conductores as $valor) {
            if($conductores[$cont] != ""){
                $procesa_query = mysqli_query($conexion, "SELECT conductor.id_urvan FROM conductor WHERE c_nombre = '$conductores[$cont]'") or die("No se pudo realizar la consulta");
                $buscar_query = mysqli_num_rows($procesa_query); 
                if( $buscar_query != 0){
                    $row = mysqli_fetch_assoc($procesa_query);
                    $consulta =  "UPDATE urvan SET c_hora_salida = '$horas[$cont]' WHERE c_id_urvan = ".$row['id_urvan'];
                    //$consulta2 = "UPDATE urvan SET c_origen = 'Puerto Escondido' WHERE c_id_urvan = ".$row['id_urvan'];
                    $consulta_actualizar = mysqli_query($conexion, $consulta) or die("No se pudo realizar la consulta");
                    //$consulta_actualizar2 = mysqli_query($conexion, $consulta2) or die("No se pudo realizar la consulta");    
                }
            }
            $cont++;
        }
    }
    mysqli_close($conexion);
    echo "<script>alert('Los datos se han guardado con éxito');window.location.href = \"index_administrador.php\"</script>";
?>