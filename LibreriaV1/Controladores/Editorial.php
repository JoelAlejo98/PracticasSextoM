<?php
include '../Modelo/conexion.php';

if (isset($_POST['btnmodificar']) != null) {
    $data1 = [
        'id' => $_POST['txtid'],
        'ed_nombre' => $_POST['txtnombre'],
        'ed_estado' => $_POST['txtestado']
    ];
    $sql1 = "update editorial set ed_nombre=:ed_nombre, ed_estado=:ed_estado where ed_id_editorial=:id";
    $query1 = $pdo->prepare($sql1);
    $query1->execute($data1);


    header("Location:../ListarEditorial.php");
}
?>
