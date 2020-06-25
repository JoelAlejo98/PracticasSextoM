<?php

include '../Modelo/conexion.php';

if (isset($_POST['btnmodificar']) != null) {
    $data1 = [
        'id' => $_POST['txtid'],
        'au_nombre' => $_POST['txtnombre'],
        'au_estado' => $_POST['txtestado']
    ];
    $sql1 = "update autor set au_nombre=:au_nombre, au_estado=:au_estado where au_id_autor=:id";
    $query1 = $pdo->prepare($sql1);
    $query1->execute($data1);


    header("Location:../ListarAutor.php");
}
?>
