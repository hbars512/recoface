<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/listar.php';
?>
<h3>Listado de Registro de Profesores</h3><hr>
<?php
if (isset($data)) {

    for ($i = 0; $i < count($data); $i++) {
        ?>
        <div class="col-md-2">
            <div class="thumbnail">
                <?php if ($data[$i] == "Femenino") { ?>
                    <img src="img/f.jpg" alt="Cinque Terre" style="width:100%">
                <?php } else { ?>
                    <img src="img/m.jpg" alt="Cinque Terre" style="width:100%">
                    <?php
                };
                $i++;
                ?>
                <div class="caption">
                    <p><b>Codigo:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                    <p><b>Nombre:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                    <p><b>Apellido:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                </div>
                <div>
                    <button style="width: 100%;" type="button" class="btn btn-default" data-toggle="modal" data-target="#<?= $data[$i] ?>">ver mas</button>
                    <!--                   modal-->
                    <div class="modal fade" id="<?= $data[$i] ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Informacion Completa</h4>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    $datos = filtrar($data[$i]);
                                    $campo = array('CODIGO', 'NOMBRE', 'APELLIDO', 'FECHA DE NAC', 'SEXO', 'EMAIL', 'MOVIL', 'DIRECCION', 'OBSERVACIONES');
                                    for ($j = 0; $j < count($datos); $j++) {
                                        echo "<b>" . $campo[$j] . "</b>" . "= " . strtoupper($datos[$j]) . "<br>";
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    termina el modal-->
                </div>
                <div class="text-center" style="width: 100%">
                    <div style="display: inline-block; width: 47%;">
                        <a href="editar.php?codigo=<?= $data[$i] ?>">
                            <button style="width: 100%" type="button" class="btn btn-warning">Editar</button>
                        </a>
                    </div>
                    <div style="display: inline-block; width: 47%;">
                        <a href="./function/eliminar.php?codigo=<?= $data[$i] ?>" onclick="return confirm('Desea eliminar el Paciente?');">
                            <button style="width: 100%" type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No se encontro ningun registro para listar.";
}
?>


<?php
include "./function/footer.php";
?>
