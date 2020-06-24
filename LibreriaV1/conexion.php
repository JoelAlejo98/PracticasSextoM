<?php
//clase conexion
try {
    $pdo=new PDO("mysql:dbname=editorial1;host=localhost","root", "");
} catch (Exception $exc) {
    die('Error:'.$exc->getMessage());
}

?>
