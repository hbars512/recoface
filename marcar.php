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

        <!-- <div class="form&#45;group"> -->
        <!--     <label class="col&#45;md&#45;4 control&#45;label">Codigo</label> -->
        <!--     <div class="col&#45;md&#45;4 inputGroupContainer"> -->
        <!--         <div class="input&#45;group"> -->
        <!--             <span class="input&#45;group&#45;addon"><i class="glyphicon glyphicon&#45;align&#45;center"></i></span> -->
        <!--             <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="codigo" minlength="7" maxlength="8" required="" name="idAsistencia" placeholder="Ingrese su Codigo" class="form&#45;control"  type="text"> -->
        <!--         </div> -->
        <!--     </div> -->
        <!-- </div> -->

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
            <!-- <div style="display: inline&#45;block"> -->
            <!--     <div class="form&#45;group"> -->
            <!--         <label class="col&#45;md&#45;4 control&#45;label"></label> -->
            <!--         <div class="col&#45;md&#45;4"> -->
            <!--             <button type="reset" class="btn btn&#45;default" >Limpiar <span class="glyphicon glyphicon&#45;repeat"></span></button> -->
            <!--         </div> -->
            <!--     </div> -->
            <!-- </div> -->
        </div>


    </fieldset>
</form>
</div><!-- /.container -->



<?php
include "./function/footer.php";
?>
