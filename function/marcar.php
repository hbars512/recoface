<?php

$n_archivo="code.txt";
shell_exec("sort -u $n_archivo -o $n_archivo");

$fp = fopen($n_archivo, "r");

require 'conexion.php';
$conn = dbConnect();
date_default_timezone_set('America/Lima');
$var = ['idAsistencia'];

// for ($i=0; $i < count($var); $i++) {
//   $_POST[$var[$i]] = trim($_POST[$var[$i]]);
//   if ( !isset($_POST[$var[$i]]) ) return header("location: ../index.php");
//   if ( empty($_POST[$var[$i]]) )  return header("location: ../index.php");
// }


while (!feof($fp)){
      $codigo = fgets($fp);

      $dateNow = new DateTime();
      $timestamp = $dateNow->format('Y-m-d H:i:s');

      $sql = "INSERT INTO asistencia (idAsistencia, fechaAsistencia) VALUES (:COD, :FAS)";

      $resultado = $conn->prepare($sql);

      $resultado->execute([":COD"   => $codigo,
        ":FAS"   => $timestamp
      ]);
}
fclose($fp);

unlink($n_archivo);


header("location: ../index.php");
