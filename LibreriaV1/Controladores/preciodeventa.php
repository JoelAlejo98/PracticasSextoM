<?php 
include '../Modelo/conexion.php';

if (isset ($_POST['BtnCrear'])!=null) {
    $id=trim($_POST["id"]);
    $pv = trim($_POST["pv"]);
$solicitud = "update libro set li_precio_venta='$pv' where li_id_libro='$id'";
$peticion = $pdo->prepare($solicitud);
$peticion->execute();

header("Location:../ListarLibro.php");
}



?>