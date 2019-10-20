<?php

$var = ['cedula', 'nombre', 'apellido', 'edad', 'fecha_nac', 'sexo', 'email', 'movil', 'direccion', 'observaciones'];

for ($i=0; $i < count($var); $i++) {
    $_POST[$var[$i]] = trim($_POST[$var[$i]]);
    if ( !isset($_POST[$var[$i]]) ) return header("location: ../index.php");
    if ( empty($_POST[$var[$i]]) )  return header("location: ../index.php");
}

$sql = "INSERT INTO estudiantes (cedula, nombre, apellido, edad, fecha_nac, sexo, email, movil, direccion, observaciones) VALUES (:CED, :NOM, :APE, :EDAD, :F_NAC, :SEXO, :EMAIL, :MOVIL, :DIR, :OBSE)";
require 'conexion.php';
$conn = dbConnect();
$resultado = $conn->prepare($sql);

$resultado->execute([":CED"   => $_POST[$var[0]],
                     ":NOM"   => $_POST[$var[1]], 
                     ":APE"   => $_POST[$var[2]], 
                     ":EDAD"  => $_POST[$var[3]], 
                     ":F_NAC" => $_POST[$var[4]], 
                     ":SEXO"  => $_POST[$var[5]], 
                     ":EMAIL" => $_POST[$var[6]], 
                     ":MOVIL" => $_POST[$var[7]], 
                     ":DIR"   => $_POST[$var[8]], 
                     ":OBSE"  => $_POST[$var[9]]
                    ]);

header("location: ../listar.php");
