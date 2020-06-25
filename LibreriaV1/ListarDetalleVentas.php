<?php

include "template/PaginaMaestra.php";
$sql ="select * from detale_ventas ";
$sqlQuery = $pdo->prepare($sql);//preparamos la consulta sql
$sqlQuery ->execute();//ejecutamos esa consulta
$resultado =$sqlQuery->fetchAll();//almacenamos los datos de la consulata
  ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listar Detalle-Ventas</h1>
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
                <td>Ventas</td>
                <td>Codigo</td>
                <td>Cantidad</td>
                <td>Descripción</td>
                <td>Detalle-Adicional</td>
                <td>Precio Unitario</td>
                <td>Descuento</td>
                <td>Precio total</td>
                <td align="center">Acciones</td>
              </tr>
              <?php  foreach ($resultado as $res ) {?>
               <tr>
                <td><?php echo $res ['dv_id_detalle_venta'];?></td>
                <td><?php echo $res ['ve_id_ventas'];?></td>
                <td><?php echo $res ['dv_codigo'];?></td>
                <td><?php echo $res ['dv_cantidad'];?></td>
                <td><?php echo $res ['dv_descripcion'];?></td>
                <td><?php echo $res ['dv_detalle_adicional'];?></td>
                <td><?php echo $res ['dv_precio_unitario'];?></td>
                <td><?php echo $res ['dv_descuento'];?></td>
                <td><?php echo $res ['dv_precio_total'];?></td>
                <td align="center"><a href="" title="Modificar"><i class="fa fa-edit fa-fw"></i></a>
                <a href="Controladores/Usuario.php?cod=<?php echo $res['us_id_usuario'];?>" title="Eliminar"><i class="fa fa-times fa-fw"></i></a></td>
              </tr>
                <?php   }?>
            </table>
        </div>
        <!-- /#page-wrapper -->

<?php

include "template/footer.php"
  ?>