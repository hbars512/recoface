<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
?>

<form class="well form-horizontal" action="function/marcar.php" method="post"  id="contact_form">
    <fieldset>

        <!-- Form Name -->
        <legend>Marcar Asistencia</legend>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Codigo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="codigo" minlength="7" maxlength="8" required="" name="idAsistencia" placeholder="Ingrese su Codigo" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div style="display: inline-block">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Registrar<span class="glyphicon glyphicon-send"></span></button>
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
</div><!-- /.container -->



<?php
include "./function/footer.php";
?>
