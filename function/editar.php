<?php

include 'conexion.php';

$conn = dbConnect();

$campos = ['codigo', 'nombre', 'apellido', 'fecha_nac', 'sexo', 'email', 'movil', 'direccion', 'observaciones'];

$sql = "SELECT * FROM profesores WHERE codigo = {$_GET['codigo']}";
foreach ($conn->query($sql) as $row) {
    foreach ($campos as $value)
         $var[] = $row[$value];
}
return $var;
