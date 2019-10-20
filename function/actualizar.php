<?php

include 'conexion.php';

$sql = "UPDATE estudiantes SET nombre='{$_POST['nombre']}', apellido='{$_POST['apellido']}', edad='{$_POST['edad']}', fecha_nac='{$_POST['fecha_nac']}', sexo='{$_POST['sexo']}', email='{$_POST['email']}', movil='{$_POST['movil']}', direccion='{$_POST['direccion']}', observaciones='{$_POST['observaciones']}' WHERE id = {$_POST['id']}";
$conn = dbConnect();
$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../listar.php");
