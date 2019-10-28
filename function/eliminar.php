<?php

include './conexion.php';

$conn = dbConnect();
$sql = "DELETE FROM asistencia WHERE idAsistencia=:COD; DELETE FROM profesores WHERE codigo=:COD";
$resultado = $conn->prepare($sql);
$resultado->execute(array(":COD" => $_GET["codigo"]));
$resultado->closeCursor();

header("location: ../listar.php");
