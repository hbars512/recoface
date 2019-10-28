<?php

include 'conexion.php';
$conn = dbConnect();

$sql = "SELECT * FROM profesores order by codigo DESC";
foreach ($conn->query($sql) as $row) {
    $data[] = $row['sexo'];
    $data[] = $row['codigo'];
    $data[] = $row['nombre'];
    $data[] = $row['apellido'];
    $data[] = $row['codigo'];
}

function filtrar($codigo) {
    $conn = dbConnect();
    $sql = "SELECT * FROM profesores WHERE codigo = $codigo";
    foreach ($conn->query($sql) as $row) {
        $data[] = $row['codigo'];
        $data[] = $row['nombre'];
        $data[] = $row['apellido'];
        $data[] = $row['fecha_nac'];
        $data[] = $row['sexo'];
        $data[] = $row['email'];
        $data[] = $row['movil'];
        $data[] = $row['direccion'];
        $data[] = $row['observaciones'];
    }
    return $data;
}
