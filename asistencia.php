<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/asistencia.php';
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

<!-- <form class="well form&#45;horizontal" action="function/asistenciaid.php" method="post"  id="contact_form"> -->
<!--     <fieldset> -->
<!--         <div class="form&#45;group"> -->
<!--             <label class="col&#45;md&#45;4 control&#45;label">Codigo</label> -->
<!--             <div class="col&#45;md&#45;4 inputGroupContainer"> -->
<!--                 <div class="input&#45;group"> -->
<!--                     <span class="input&#45;group&#45;addon"><i class="glyphicon glyphicon&#45;align&#45;center"></i></span> -->
<!--                     <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="codigo" minlength="7" maxlength="8" required="" name="codigo" placeholder="Ingrese su Codigo" class="form&#45;control"  type="text"> -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--  -->
<!--         <div class="text&#45;center"> -->
<!--             <div style="display: inline&#45;block"> -->
<!--                 <!&#45;&#45; Button &#45;&#45;> -->
<!--                 <div class="form&#45;group"> -->
<!--                     <label class="col&#45;md&#45;4 control&#45;label"></label> -->
<!--                     <div class="col&#45;md&#45;4"> -->
<!--                         <button type="submit" class="btn btn&#45;warning" >Filtrar<span class="glyphicon glyphicon&#45;send"></span></button> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div style="display: inline&#45;block"> -->
<!--                 <div class="form&#45;group"> -->
<!--                     <label class="col&#45;md&#45;4 control&#45;label"></label> -->
<!--                     <div class="col&#45;md&#45;4"> -->
<!--                         <button type="reset" class="btn btn&#45;default" >Limpiar <span class="glyphicon glyphicon&#45;repeat"></span></button> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--  -->
<!--  -->
<!--     </fieldset> -->
<!-- </form> -->

<?php
include "./function/footer.php";
?>

