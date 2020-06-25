<?php
include "template/PaginaMaestra.php";
@$cod=$_GET['li_id_libro'];
if($cod==""){?>

<?php } else{ 
  $select="select *from libro where li_id_libro=$cod";
  $query=$pdo->prepare($select);
  $query->execute();
  $resultado=$query->fetchAll();
  foreach($resultado as $res){
    $año=$res['li_anio'];
    $categoria=$res['li_categoria'];
    $isbn=$res['li_isbn'];
    $precio=$res['li_precio_venta'];
    $titulo=$res['li_titulo'];
    $estado=$res['li_estado'];
  } 
  ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="">
<div class="card">
  <h5 class="card-header">Modificar Libro</h5>
  <div class="card-body">
    <form action="Controladores/Libro.php" method="POST">
    <div class="row">
    <div class="col">
    <input type="hidden" name="txtid" class="form-control" id="txtid"  value="<?php echo $cod;?>"/>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <label>Año</label>
    <input type="text" name="txtaño" class="form-control" id="txtaño" placeholder="Ingrese Año" value="<?php echo $año;?>"/>
    </div>
    <div class="col">
    <label>Categoria</label>
    <input type="text" name="txtcategoria" class="form-control" id="txtcategoria" placeholder="Ingrese Categoria" value="<?php echo $categoria;?>"/>
    </div>
  
  </div>

  <br>
  <div class="row">
    <div class="col">
    <label>ISBN</label>
    <input type="text" name="txtisbn" class="form-control" id="txtisbn" placeholder="Ingrese ISBN" value="<?php echo $isbn;?>"/>
    </div>
    <div class="col">
    <label>Precio</label>
    <input type="text" name="txtprecio" class="form-control" id="txtprecio" placeholder="Ingrese Precio" value="<?php echo $precio;?>"/>
    </div>
</div>
<br>
<div class="row">
<div class="col">
    <label>Titulo</label>
    <input type="text" name="txttitulo" class="form-control" id="txttitulo" placeholder="Ingrese Titulo" value="<?php echo $titulo;?>"/>
    </div>
    <div class="col">
    <label>Estado</label>
    <input type="text" name="txtestado" class="form-control" id="txtestado" placeholder="Ingrese Estado" value="<?php echo $estado;?>"/>  
    </div>

</div>

 <br>

 <div class="row">
    <div class="col">
      <input type="submit" class="btn btn-primary" name="btnmodificar" value="Modificar"/>
    </div>
    <div class="col">
    
    </div>
  </div>


</div>
  </div>
    </form>
  </div>
</div>
</div>

</div>
<?php } ?>
