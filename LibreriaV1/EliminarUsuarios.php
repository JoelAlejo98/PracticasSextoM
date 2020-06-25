<?php
include "Modelo/conexion.php";

if(isset($_GET['cod'])){
    $id = $_GET['cod'];
    $sql = "DELETE FROM usuario WHERE us_id_usuario = $id";
    $sqlQuery = $pdo->prepare($sql);
    $sqlQuery ->execute();
    $resultado =$sqlQuery->fetchAll();
    if(!$resultado){
        header('Location: /ListarUsuarios.php');
    }
    header('Location: /ListarUsuarios.php');
}



?>