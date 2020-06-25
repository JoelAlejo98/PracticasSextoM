<?php

include '../Modelo/conexion.php';

if (isset($_POST['btnmodificar']) != null) {
    $data1 = [
        'id' => $_POST['txtid'],
        'li_anio' => $_POST['txtaño'],
        'li_categoria' => $_POST['txtcategoria'],
        'li_isbn' => $_POST['txtisbn'],
        'li_precio_venta' => $_POST['txtprecio'],
        'li_titulo' => $_POST['txttitulo'],
        'li_estado' => $_POST['txtestado']
    ];
    $sql1 = "update libro set li_anio=:li_anio, li_categoria=:li_categoria, li_isbn=:li_isbn, li_precio_venta=:li_precio_venta, li_titulo=:li_titulo, li_estado=:li_estado where li_id_libro=:id";
    $query1 = $pdo->prepare($sql1);
    $query1->execute($data1);


    header("Location:../ListarLibro.php");
}
?>
