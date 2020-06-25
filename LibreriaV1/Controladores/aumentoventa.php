<?php 
include '../Modelo/conexion.php';
// 100 13%
$val_aument=$_POST['aum_vent'];
$sql = "UPDATE libro SET li_precio_venta = (li_precio_venta + ((li_precio_venta * $val_aument)/100))";
    $sqlQuery = $pdo->prepare($sql);
    $sqlQuery ->execute();
    $resultado =$sqlQuery->fetchAll();
    if(!$resultado){
        header('Error al hacer el aumento');
    }
    header('Location: ../ListarLibro.php');
?>