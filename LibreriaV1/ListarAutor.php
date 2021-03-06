<?php

include "template/PaginaMaestra.php";
$sql ="select * from autor where au_estado ='A'";
$sqlQuery = $pdo->prepare($sql);//preparamos la consulta sql
$sqlQuery ->execute();//ejecutamos esa consulta
$resultado =$sqlQuery->fetchAll();//almacenamos los datos de la consulata
  ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listar Autor</h1>
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
                <td>Código</td>
                <td>Nombre</td>
                <td>Estado</td>
                <td align="center">Acciones</td>
              </tr>
              <?php  foreach ($resultado as $res ) {?>
               <tr>
                <td><?php echo $res ['au_id_autor'];?></td>
                <td><?php echo $res ['au_nombre'];?></td>
                <td><?php echo $res ['au_estado'] == 'A'? "Activo" : "Inactivo";?></td>
                <td align="center"><a href="ModificarAutor.php?au_id_autor=<?php echo $res['au_id_autor'];?>" title="Modificar"><i class="fa fa-edit fa-fw"></i></a>
                <a href="EliminarAutor.php?cod=<?php echo $res['au_id_autor'];?>" title="Eliminar"><i class="fa fa-times fa-fw"></i></a></td>
              </tr>
                <?php   }?>
            </table>
        </div>
        <!-- /#page-wrapper -->

<?php

include "template/footer.php"
  ?>