<?php
session_start();
include "../conexion.php";
if (trim($_POST['txt_user']) != "" && ($_POST['txt_pass']) != "") {
    $usu = $_POST['txt_user'];
    $pass = $_POST['txt_pass'];

    $passMd5= md5($pass);
    $_SESSION['usuario']=$usu;
    echo $sql = "select * from usuario where us_user='$usu' and us_pass='$pass'";
    $sqlQuery = $pdo->prepare($sql);//preparmos la consulta sql
    $sqlQuery->execute();//ejecutamos esa consulta
    $resultado = $sqlQuery->fetchAll();//almacenamos los datos de la consulta 

    foreach ($resultado as $res) {
        $rol = $res['tp_id_tipo_usuario'];
    }
    
    if (@$rol) {
        switch ($rol) {
            case ("1"):echo "<script>alert('Bienvenido Administrador');
                             location.href='../inicio.php';</script>";
                break;

            case ("2"):echo  "<script>alert('Bienvenido Invitado');
                              location.href='../inicio.php';</script>";
                break;
        }
    } else {
        echo "<script>alert('Usuario/Password incorrectos');
        location.href='../index.php';</script>" ;
    }
} else {
    echo "<script>alert('Datos no Ingresados');
    location.href='../index.php';</script>" ;
}
?>