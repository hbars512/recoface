<?php

include './conexion.php';

$conn = dbConnect();
$sql = "DELETE FROM profesores WHERE id=:ID";
$resultado = $conn->prepare($sql);
$resultado->execute(array(":ID" => $_GET["id"]));
$resultado->closeCursor();

header("location: ../listar.php");
