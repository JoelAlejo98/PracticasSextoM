<?php 
include '../Modelo/conexion.php';
// 100 13%
$val_desc=$_POST['des_vent'];
$sql = "UPDATE libro SET li_precio_venta = li_precio_venta - ((li_precio_venta * $val_desc)/100)";
    $sqlQuery = $pdo->prepare($sql);
    $sqlQuery ->execute();
    $resultado =$sqlQuery->fetchAll();
    if(!$resultado){
        header('Error al hacer el descuento');
    }
    header('Location: ../ListarLibro.php');

?>