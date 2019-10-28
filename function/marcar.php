<?php

date_default_timezone_set('America/Lima');
$var = ['idAsistencia'];

for ($i=0; $i < count($var); $i++) {
    $_POST[$var[$i]] = trim($_POST[$var[$i]]);
    if ( !isset($_POST[$var[$i]]) ) return header("location: ../index.php");
    if ( empty($_POST[$var[$i]]) )  return header("location: ../index.php");
}

$dateNow = new DateTime();
$timestamp = $dateNow->format('Y-m-d H:i:s');

$sql = "INSERT INTO asistencia (idAsistencia, fechaAsistencia) VALUES (:COD, :FAS)";

require 'conexion.php';
$conn = dbConnect();
$resultado = $conn->prepare($sql);

$resultado->execute([":COD"   => $_POST[$var[0]],
                     ":FAS"   => $timestamp
                    ]);

header("location: ../index.php");
