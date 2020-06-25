<?php
include '../Modelo/conexion.php';
if($_GET){
$data=['id' => $_GET['cod']
]; 
$sql="update usuario set estado='I' where cod=:id";
$query=$pdo->prepare($sql);
$query->execute($data);
//echo "<script>alert ('Registro Eliminado');
//location.href='../listarUsuarios.php';</script>";

header("Location:../listarUsuarios.php");
}
if(isset($_POST['btncrear'])!= null){
    $tp_id_tipo_usuario=$_POST['cbrol'];
    $us_nombre=$_POST['txtnombre'];
    $us_apellido=$_POST['txtapellido'];
    $us_user = $_POST['txtusuario'];
    $us_pass =$_POST['txtpassword']; 
    $us_estado="A";
    $us_fecha=$_POST['txtfecha'];
    $txtfecha = strtotime($us_fecha);
    $txtfecha = date('Y-m-d',$txtfecha);
$sql="INSERT INTO usuario(tp_id_tipo_usuario,us_nombre,us_apellido,us_user,us_pass,us_estado,us_fecha)"
        . "VALUES('$tp_id_tipo_usuario','$us_nombre','$us_apellido','$us_user','$us_pass','$us_estado','$txtfecha')";

$query=$pdo->prepare($sql);
  $query->execute();
  $resultado=$query->fetchAll();
 
echo 'Usuario insertado con exito';
header("Location:../listarUsuarios.php");
}else{
    echo 'usiario no insertado';
}    



if(isset($_POST['btnmodificar'])!= null){
       $data1 =[
              'id'=> $_POST['txtid'],
              'nombre' => $_POST['txtnombre'],
              'usuario'=> $_POST['txtusuario'],
              'password'=> $_POST['txtpassword'],
              'estado'=> $_POST['txtestado']
       ]; 
       $sql1="update usuarios set nombre=:nombre, usuario=:usuario, password=:password, estado=:estado where cod=:id";
       $query1=$pdo->prepare($sql1);
       $query1->execute($data1);
       
       
       header("Location:../listarUsuarios.php");
       }
?>
