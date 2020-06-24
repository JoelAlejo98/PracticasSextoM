<?php
//clase conexion
try {
    $pdo=new PDO("mysql:dbname=editorial;host=localhost","root", "");
} catch (Exception $exc) {
    die('Error:'.$exc->getMessage());
}

?>
