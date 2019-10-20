<?php

function dbConnect() {
    $conn = null;
    $host = 'recoface.loc';
    $user = 'root';
    $pwd  = '';
    $db   = 'recoface';
        try {
            $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pwd);
        } catch (PDOException $e) {
            echo '<p>Error en la conexion de la base de datos.</p>';
            exit;
        }
    return $conn;
}
