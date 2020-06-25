<?php
include 'template/PaginaMaestra.php';

$id_libro=$_GET['cod'];

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar precio Venta</h1>
                </div>
                    <div>
                      <form action="controladores/preciodeventa.php" method="POST">
                    <input type="text" name="id" value=<?php echo $id_libro;?>/>
                    <div class="col-lg-12">
                    <input type="text" name="pv" value="IngresePrecio de Venta"/>
                    </div>
                      <div class="col-lg-12">

                      <input type="submit" name="BtnCrear" value="Crear" class="btn-primary" />

                    
                      </div>
                      </div>
                      </form>
                      <?php 
                      include 'template/footer.php';
                      ?>