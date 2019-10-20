<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
?>

<form class="well form-horizontal" action="function/insertar.php" method="post"  id="contact_form" onsubmit="return validarEmail()">
    <fieldset>

        <!-- Form Name -->
        <legend>Formulario de Registro</legend>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Cedula</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="cedula" minlength="7" maxlength="8" required="" name="cedula" placeholder="Ingrese su cedula" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="nombre" placeholder="Ingrese su nombre" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Apellido</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="apellido" placeholder="Ingrese su apellido" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Edad</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="2" required="" name="edad" placeholder="Ingrese su edad" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Fecha de Nacimiento</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input required="" name="fecha_nac" placeholder="Ingrese su fecha de nacimiento" class="form-control"  type="date">
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
                        <option>Femenino</option>
                        <option>Masculino</option>
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
                    <input class="form-control" onblur="return validarEmail()" onclick="quitar_clase()" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" id="email" name="email" placeholder="Ingrese su E-Mail" class="form-control"  type="text">
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
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="11" required="" name="movil" placeholder="(0416) 256-1212" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Dirección</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input onpaste="alert('No puedes pegar');return false" maxlength="50" required="" name="direccion" placeholder="Ingrese su direccion" class="form-control" type="text">
                </div>
            </div>
        </div>


        <!-- Text area -->

        <div class="form-group">
            <label class="col-md-4 control-label">Observaciones</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea onpaste="alert('No puedes pegar');return false" maxlength="255" required="" class="form-control" name="observaciones" placeholder="indique su observación."></textarea>
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