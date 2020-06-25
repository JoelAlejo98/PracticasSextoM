<?php
include "Modelo/conexion.php";

if(isset($_GET['cod'])){
    $id = $_GET['cod'];
    $sql = "DELETE FROM libro WHERE li_id_libro = $id";
    $sqlQuery = $pdo->prepare($sql);
    $sqlQuery ->execute();
    $resultado =$sqlQuery->fetchAll();
    if(!$resultado){
        header('Error de conexion');
    }
    header('Location: ListarLibro.php');
}



?>