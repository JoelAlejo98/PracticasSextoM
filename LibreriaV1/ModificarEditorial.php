<?php
include "template/PaginaMaestra.php";
@$cod=$_GET['ed_id_editorial'];
if($cod==""){?>

<?php } else{ 
  $select="select *from editorial where ed_id_editorial=$cod";
  $query=$pdo->prepare($select);
  $query->execute();
  $resultado=$query->fetchAll();
  foreach($resultado as $res){
    $nombre=$res['ed_nombre'];
    $estado=$res['ed_estado'];
  } 
  ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="">
<div class="card">
  <h5 class="card-header">Modificar Editorial</h5>
  <div class="card-body">
      <form action="Controladores/Editorial.php" method="POST">
    <div class="row">
    <div class="col">
    <input type="hidden" name="txtid" class="form-control" id="txtid"  value="<?php echo $cod;?>"/>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <label>Nombre</label>
    <input type="text" name="txtnombre" class="form-control" id="txtnombre" placeholder="Ingrese Nombre Autor" value="<?php echo $nombre;?>"/>
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


