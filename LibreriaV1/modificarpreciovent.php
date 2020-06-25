<?php
include 'template/PaginaMaestra.php';

$id_libro=$_GET['cod'];

?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12 mb-4">
      <h1 class="page-header">Modificar precio Venta</h1>
    </div>
    <div>
      <form action="controladores/preciodeventa.php" method="POST">
        <div class="input-group password">
          <input type="text" hidden name="id" value=<?php echo $id_libro;?>/>
          <input type="text" class="form-control" name="pv" placeholder="Ingrese precio venta"/>
          <input type="submit" class="btn btn-primary" name="BtnCrear" value="Modificar" class="btn-primary" id="button-addon2" />
        </div>        
      </form>
    </div>
<?php 
  include 'template/footer.php';
?>