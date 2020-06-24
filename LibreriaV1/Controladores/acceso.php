<?php
session_start();
$usuario = filter_input(INPUT_POST, 'txt_user');
$contra = filter_input(INPUT_POST, 'txt_pass');
if (!trim($usuario) == null) {
    if (!trim($contra) == null) {
        include '../Modelo/conexion.php';
        $solicitud = "select * from usuario where us_user='$usuario' and us_estado='A' and us_id_usuario=us_id_usuario";
        $peticion = $pdo->prepare($solicitud);
        $peticion->execute();
        $resultado = $peticion->fetchAll();
        foreach ($resultado as $res) {
            $usubd = $res['us_user'];
            $contradb = $res['us_pass'];
            $tipo = $res['tp_id_tipo_usuario'];
        }
        if (!trim($usubd)==null) {
            if ($contra == $contradb) {
               $_SESSION['usuario']=$usuario;
               $_SESSION['tipo']=$tipo;
               $_SESSION["mensaje"]=null;
                header('Location: ../administracion.php');
                exit();
            } else {
                $_SESSION['usuario']=null;
                $_SESSION["mensaje"] = 'Contraseña Incorrecta';
                header('Location: ../index.php');
                exit();
            }
        } else {
            $_SESSION['usuario']=null;
            $_SESSION["mensaje"] = 'No existe el usuario';
            header('Location: ../index.php');
            exit();
        }
    } else {
        $_SESSION['usuario']=null;
        $_SESSION["mensaje"] = 'Campo de Contraseña Vacio';
        header('Location: ../index.php');
    }
} else {
    $_SESSION['usuario']=null;
    $_SESSION["mensaje"] = 'Campo de Usuario Vacio';
    header('Location: ../index.php');
    exit();
}
