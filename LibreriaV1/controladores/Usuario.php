<?php
include '../conexion.php';
if ($_GET) {
    $data = ['id'=>$_GET['cod']];
    $sql = "update usuarios set estado='I' where cod=:id";
    $query = $pdo -> prepare($sql);    
    $query -> execute($data);
    header("Location:../listarUsuarios.php");
}

if (isset($_POST['btncrear'])!=null){
    $data = ['nombre'=>$_POST['txtnombre'],
             'usuario'=>$_POST['txtusuario'],
             'password'=>$_POST['txtpassword'], 
             'rol'=>$_POST['cbrol'],
             'estado'=>"A"
        ];

    $sql = "insert into usuarios (nombre,usuario,password,idrol,estado)values(:nombre,:usuario,:password,:rol,:estado)";
    $query = $pdo -> prepare($sql);    
    $query -> execute($data);
    header("Location:../listarUsuarios.php");
}

if (isset($_POST['btnmodificar'])!=null){
    $data1 = [
             'id'=>$_POST['txtid'],
             'nombre'=>$_POST['txtnombre'],
             'usuario'=>$_POST['txtusuario'],
             'password'=>$_POST['txtpassword'], 
             'estado'=>$_POST['txtestado'], 
        ];

    $sql1 = "update usuarios set nombre=:nombre, usuario=:usuario, password=:password, estado=:estado where cod=:id";
    $query1 = $pdo -> prepare($sql1);    
    $query1 -> execute($data1);
    header("Location:../listarUsuarios.php");
}

?>