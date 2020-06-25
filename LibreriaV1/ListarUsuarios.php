<?php

include "template/PaginaMaestra.php";
$sql ="select * from usuario where us_estado ='A'";
$sqlQuery = $pdo->prepare($sql);//preparamos la consulta sql
$sqlQuery ->execute();//ejecutamos esa consulta
$resultado =$sqlQuery->fetchAll();//almacenamos los datos de la consulata
  ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listar Usuarios</h1>
                </div>
                  <div class="col-lg-12">
                    <div>
                      <form action="Usuario.php" method="POST">
                         <input type="submit" name="BtnCrear" value="Crear" class="btn-primary" />
                      </form>
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <table class="table table-striped">
              <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Usuario</td>
                <td>Rol</td>
                <td>Estado</td>
                <td align="center">Acciones</td>
              </tr>
              <?php  foreach ($resultado as $res ) {?>
               <tr>
              
                <td name="codigo"><?php echo $res ['us_id_usuario'];?></td>
                <td><?php echo $res ['us_nombre'];?></td>
                <td><?php echo $res ['us_apellido'];?></td>
                <td><?php echo $res ['us_user'];?></td>
                <td><?php echo $res ['tp_id_tipo_usuario'] == '1'? "Administrador" : "Invitado";?></td>
                <td><?php echo $res ['us_estado'] == 'A'? "Activo" : "Inactivo";?></td>
                <td align="center"><a href="" title="Modificar"><i class="fa fa-edit fa-fw"></i></a>
                <a href="EliminarUsuarios.php?cod=<?php echo $res['us_id_usuario']?>" title="Eliminar"><i class="fa fa-times fa-fw"></i></a></td>
                
              </tr>
                <?php   }?>
            </table>
        </div>
        <!-- /#page-wrapper -->

<?php

include "template/footer.php"
  ?>
