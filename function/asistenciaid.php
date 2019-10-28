<?php

include 'conexion.php';
$conn = dbConnect();

$codigo = $_POST['codigo'];

$sql = "SELECT profesores.codigo as Codigo,
               profesores.nombre as Nombre,
               profesores.apellido as Apellido,
               asistencia.fechaAsistencia as Asistencia
        FROM profesores INNER JOIN asistencia
        WHERE profesores.codigo = $codigo
          AND asistencia.idAsistencia = $codigo
        ORDER BY profesores.codigo DESC";
$filas = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);
