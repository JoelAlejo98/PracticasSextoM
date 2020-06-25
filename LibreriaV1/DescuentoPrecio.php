<?php
include 'template/PaginaMaestra.php';
?>
<div id="page-wrapper">
    <div class="row col-12 d-flex justify-content-center">
        <div class="col-lg-12 mb-4" style="text-align:center;">
            <h1 class="page-header">Descuento de precio de Venta</h1>
            <h3 class="page-header">Ingrese el porcentaje en números a descontar a los libros</h1>
        </div>
        <div>
            <form action="controladores/descuentoventa.php" method="POST">
                <div class="col-12 d-flex justify-content-center">
                    <input type="number" class="form-control m-3" name="des_vent" placeholder="Ingrese el porcentaje %" />
                    <input type="submit" class="btn btn-primary m-3" name="Btn_Desc" value="Modificar" class="btn-primary" id="button-addon3" />
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<?php
include 'template/footer.php';
?>