<?php

include 'conexion.php';

$sql = "UPDATE profesores SET nombre='{$_POST['nombre']}', apellido='{$_POST['apellido']}', fecha_nac='{$_POST['fecha_nac']}', sexo='{$_POST['sexo']}', email='{$_POST['email']}', movil='{$_POST['movil']}', direccion='{$_POST['direccion']}', observaciones='{$_POST['observaciones']}' WHERE codigo = {$_POST['codigo']}";
$conn = dbConnect();
$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../listar.php");
