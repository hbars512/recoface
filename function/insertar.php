<?php

$var = ['codigo', 'nombre', 'apellido', 'fecha_nac', 'sexo', 'email', 'movil', 'direccion', 'observaciones'];

for ($i=0; $i < count($var); $i++) {
    $_POST[$var[$i]] = trim($_POST[$var[$i]]);
    if ( !isset($_POST[$var[$i]]) ) return header("location: ../index.php");
    if ( empty($_POST[$var[$i]]) )  return header("location: ../index.php");
}

$sql = "INSERT INTO profesores (codigo, nombre, apellido, fecha_nac, sexo, email, movil, direccion, observaciones) VALUES (:COD, :NOM, :APE, :F_NAC, :SEXO, :EMAIL, :MOVIL, :DIR, :OBSE)";
require 'conexion.php';
$conn = dbConnect();
$resultado = $conn->prepare($sql);

$resultado->execute([":COD"   => $_POST[$var[0]],
                     ":NOM"   => $_POST[$var[1]], 
                     ":APE"   => $_POST[$var[2]], 
                     ":F_NAC" => $_POST[$var[3]], 
                     ":SEXO"  => $_POST[$var[4]], 
                     ":EMAIL" => $_POST[$var[5]], 
                     ":MOVIL" => $_POST[$var[6]], 
                     ":DIR"   => $_POST[$var[7]], 
                     ":OBSE"  => $_POST[$var[8]]
                    ]);

header("location: ../listar.php");
