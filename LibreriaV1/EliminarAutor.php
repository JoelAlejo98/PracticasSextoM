<?php
include "Modelo/conexion.php";

if(isset($_GET['cod'])){
    $id = $_GET['cod'];
    $sql = "DELETE FROM autor WHERE au_id_autor = $id";
    $sqlQuery = $pdo->prepare($sql);
    $sqlQuery ->execute();
    $resultado =$sqlQuery->fetchAll();
    if(!$resultado){
        header('Error de conexion');
    }
    header('Location: ListarAutor.php');
}



?>