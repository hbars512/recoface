<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include "./function/editar.php";
//$var = filtrar($id);
?>

<form class="well form-horizontal" action="function/actualizar.php" method="POST"  id="contact_form" onsubmit="return validarEmail()">
    <fieldset>

        <!-- Form Name -->
        <legend>Formulario para actualizar Registro</legend>

        <!-- Text input-->
        <div style="visibility: hidden; display: none;">
            <div class="form-group">
                <label class="col-md-4 control-label">id</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                        <input readonly="" onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="id" minlength="7" maxlength="8" required="" name="id" placeholder="Ingrese su codigo" class="form-control"  type="text" value="<?= $var[0]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Codigo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                    <input readonly="" onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="codigo" minlength="7" maxlength="8" required="" name="codigo" placeholder="Ingrese su codigo" class="form-control"  type="text" value="<?= $var[1]; ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="nombre" placeholder="Ingrese su nombre" class="form-control"  type="text" value="<?= $var[2]; ?>">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Apellido</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="apellido" placeholder="Ingrese su apellido" class="form-control"  type="text" value="<?= $var[3]; ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Edad</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="2" required="" name="edad" placeholder="Ingrese su edad" class="form-control"  type="text" value="<?= $var[4]; ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Fecha de Nacimiento</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input required="" name="fecha_nac" placeholder="Ingrese su fecha de nacimiento" class="form-control"  type="date" value="<?= $var[5]; ?>">
                </div>
            </div>
        </div>

        <!-- Select Basic -->

        <div class="form-group">
            <label class="col-md-4 control-label">Sexo</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="sexo" class="form-control selectpicker" >
                        <?php
                        if ($var[6] == "Femenino") {
                            ?>
                            <option>Femenino</option>
                            <option>Masculino</option>
                            <?php
                        } else {
                            ?>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group" id="valid_email">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input class="form-control" onblur="return validarEmail()" onclick="quitar_clase()" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" id="email" name="email" placeholder="Ingrese su E-Mail" class="form-control"  type="text" value="<?= $var[7]; ?>">
                    <span id="equis" class=""></span>
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Movil #</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="11" required="" name="movil" placeholder="(0416) 256-1212" class="form-control" type="text" value="<?= $var[8]; ?>">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Dirección</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input onpaste="alert('No puedes pegar');return false" maxlength="50" required="" name="direccion" placeholder="Ingrese su direccion" class="form-control" type="text" value="<?= $var[9]; ?>">
                </div>
            </div>
        </div>


        <!-- Text area -->

        <div class="form-group">
            <label class="col-md-4 control-label">Observaciones</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea onpaste="alert('No puedes pegar');return false" maxlength="255" required="" class="form-control" name="observaciones" placeholder="indique su observación."><?= $var[10]; ?></textarea>
                </div>
            </div>
        </div>

        <div class="text-center">
            <div style="display: inline-block">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Actualizar<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </div>
            <div style="display: inline-block">
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <a href="listar.php"><button type="button" class="btn btn-default" > Volver <span class="glyphicon glyphicon-list"></span></button></a>
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
