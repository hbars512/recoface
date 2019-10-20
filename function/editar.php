<?php

include 'conexion.php';

$conn = dbConnect();

$campos = ['id','codigo', 'nombre', 'apellido', 'edad', 'fecha_nac', 'sexo', 'email', 'movil', 'direccion', 'observaciones'];

$sql = "SELECT * FROM profesores WHERE id = {$_GET['id']}";
foreach ($conn->query($sql) as $row) {
    foreach ($campos as $value) 
         $var[] = $row[$value];
}
return $var;
