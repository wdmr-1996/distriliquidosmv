<?php
    //error_reporting(0);
    $conexion = new MySQLi("localhost", "root", "", "distriliquidos");
    $conexion->set_charset("utf-8");
    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    } else {
        //echo "Conexión exitosa";
    }
?>