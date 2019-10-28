<?php

include 'conexion.php';
$conn = dbConnect();

$sql = "SELECT profesores.codigo as Codigo,
               profesores.nombre as Nombre,
               profesores.apellido as Apellido,
               asistencia.fechaAsistencia as Asistencia
        FROM profesores INNER JOIN asistencia WHERE profesores.codigo = asistencia.idAsistencia
        order by profesores.codigo DESC";
$filas=$conn->query($sql)->fetchAll(PDO::FETCH_OBJ);

$sqlid = "SELECT profesores.codigo as Codigo,
               profesores.nombre as Nombre,
               profesores.apellido as Apellido,
               asistencia.fechaAsistencia as Asistencia
        FROM profesores INNER JOIN asistencia
        WHERE profesores.codigo = 30584665
          AND asistencia.idAsistencia = 30584665
        ORDER BY profesores.codigo DESC";
$filasid = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);
