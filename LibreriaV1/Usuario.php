<?php
include "Template/PaginaMaestra.php";
@$cod=$_GET['cod'];
if($cod==""){?>
<!-- Begin Page Content -->
<div class="container-fluid">

<div class="">
<div class="card">
  <h5 class="card-header">Crear Usuarios</h5>
  <div class="card-body">
    <form action="Controladores/Usuario.php" method="post">
    <div class="row">
        
    <div class="col">
    <label>Nombre</label>
    <input type="text" name="txtnombre" class="form-control" id="txtnombre" placeholder="Ingrese su nombre"/>
    </div>
        <div class="col">
    <label>Apellido</label>
    <input type="text" name="txtapellido" class="form-control" id="txtapellido" placeholder="Ingrese su apellido"/>
    </div>
       
        <div class="col">
    <label>Fecha</label>
    <input type="text" name="txtfecha" class="form-control" id="txtfecha"  placeholder="Ingrese la fecha"/>
    </div>
   
  
  </div>

  <br>
  <div class="row">
       <div class="col">
    <label>Usuario</label>
    <input type="text" name="txtusuario" class="form-control" id="txtusuario" placeholder="Ingrese su email"/>
    </div>
  
    <div class="col">
    <label>Password</label>
    <input type="password" name="txtpassword" class="form-control" id="txtpassword" placeholder="Ingrese su password"/>
    </div>
    <div class="col">
    <label>Tipo de rol</label>
    <select class="form-control" name="cbrol" id="cbrol">
    <option value="">Seleccione un rol</option>
    <option value="1">Administrador</option>
    <option value="2">Invitado</option>
    </select>
    </div>
</div>

 <br>

 <div class="row">
    <div class="col">
      <input type="submit" class="btn btn-primary" name="btncrear" value="Guardar"/>
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
<!-- /.container-fluid -->



<?php } else{ 
  $select="select *from usuarios where cod=$cod";
  $query=$pdo->prepare($select);
  $query->execute();
  $resultado=$query->fetchAll();
  foreach($resultado as $res){
    $nombre=$res['nombre'];
    $usuario=$res['usuario'];
    $password=$res['password'];
    $rol=$res['idrol'];
    $estado=$res['estado'];

  }
  
  
  
  ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="">
<div class="card">
  <h5 class="card-header">Modificar Usuarios</h5>
  <div class="card-body">
    <form action="Controladores/Usuario.php" method="POST">
    <div class="row">
    <div class="col">
    <input type="hidden" name="txtid" class="form-control" id="txtid"  value="<?php echo $cod;?>"/>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <label>Nombre</label>
    <input type="text" name="txtnombre" class="form-control" id="txtnombre" placeholder="Ingrese su nombfre y apellido" value="<?php echo $nombre;?>"/>
    </div>
    <div class="col">
    <label>Usuario</label>
    <input type="text" name="txtusuario" class="form-control" id="txtusuario" placeholder="Ingrese su email" value="<?php echo $usuario;?>"/>
    </div>
  
  </div>

  <br>
  <div class="row">
    <div class="col">
    <label>Password</label>
    <input type="password" name="txtpassword" class="form-control" id="txtpassword" placeholder="Ingrese su password" value="<?php echo $password;?>"/>
    </div>
    <div class="col">
    <label>Tipo de rol</label>
    <select class="form-control" name="cbrol" id="cbrol">
    <option value="">Seleccione un rol</option>
    <option value="1">Administrador</option>
    <option value="2">Invitado</option>
    </select>
    </div>
</div>
<br>
<div class="row">
<div class="col">
    <label>Estado</label>
    <input type="text" name="txtestado" class="form-control" id="txtestado" placeholder="Estado" value="<?php echo $estado;?>"/>
    </div>
    <div class="col">
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
<!-- /.container-fluid -->


<?php } ?>




<?php
include "Template/footer.php"
?>
