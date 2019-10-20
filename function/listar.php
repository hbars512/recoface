<?php

include 'conexion.php';
$conn = dbConnect();

$sql = "SELECT * FROM profesores order by id DESC";
foreach ($conn->query($sql) as $row) {
    $data[] = $row['sexo'];
    $data[] = $row['codigo'];
    $data[] = $row['nombre'];
    $data[] = $row['apellido'];
    $data[] = $row['edad'];
    $data[] = $row['id'];
}

function filtrar($id) {
    $conn = dbConnect();
    $sql = "SELECT * FROM profesores WHERE id = $id";
    foreach ($conn->query($sql) as $row) {
        $data[] = $row['codigo'];
        $data[] = $row['nombre'];
        $data[] = $row['apellido'];
        $data[] = $row['edad'];
        $data[] = $row['fecha_nac'];
        $data[] = $row['sexo'];
        $data[] = $row['email'];
        $data[] = $row['movil'];
        $data[] = $row['direccion'];
        $data[] = $row['observaciones'];
    }
    return $data;
}
