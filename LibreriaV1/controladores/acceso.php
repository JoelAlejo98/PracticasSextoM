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
            case ("1") :
                echo "Administrador";
                break;

            case ("2") :
                echo  "Invitado";
                break;
        }
    }
    } 
    else 
    {
    echo "Error al conectar base de datos";
    }
?>
