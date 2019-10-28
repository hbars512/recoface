<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/asistenciaid.php';
?>
<h3>Listado de Asistencia de Profesores</h3><hr>

<div class="container">
    <div class="row">
        <div class="col-6">
            <table class="table table-sm">
                <thead><th>CODIGO</th><th>NOMBRE</th><th>APELLIDO</th><th>ASISTENCIA</th>
                </thead>
                <tbody>
                    <?php foreach ($filas as $fila): ?>
                        <tr>
                            <td><?php echo $fila->Codigo; ?></td>
                            <td><?php echo $fila->Nombre; ?></td>
                            <td><?php echo $fila->Apellido; ?></td>
                            <td><?php echo $fila->Asistencia; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<form class="well form-horizontal" action="function/asistenciaid.php" method="post"  id="contact_form">
    <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label">Codigo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="codigo" minlength="7" maxlength="8" required="" name="codigo" placeholder="Ingrese su Codigo" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div style="display: inline-block">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Filtrar<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </div>
            <div style="display: inline-block">
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="reset" class="btn btn-default" >Limpiar <span class="glyphicon glyphicon-repeat"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>

<?php
header(asistenciaid.php);
include "./function/footer.php";
?>

