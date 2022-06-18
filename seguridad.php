<?php
@session_start();

if ($_SESSION['autentica'] != 'SI'){
    header("location:index.php");
    exit();
}
?>