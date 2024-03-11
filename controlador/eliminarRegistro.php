<?php
// Archivo eliminarRegistro.php

// Incluye el archivo de conexión a la base de datos
include("../modelo/conexion.php");

// Verifica si se proporciona un ID válido
if (isset($_GET['ids'])) {
    // Convertir los IDs a un array
    $ids = json_decode($_GET['ids']);

    // Prepara la consulta para eliminar los registros
    $query = "DELETE FROM productos WHERE idProducto IN (";
    $query .= implode(',', array_fill(0, count($ids), '?'));
    $query .= ")";
    $stmt = $conexion->prepare($query);

    if ($stmt) {
        // Construye un string con los tipos de parámetro necesarios para bind_param
        $types = str_repeat('i', count($ids));
        // Combina los parámetros en un array para pasar a bind_param
        $params = array_merge([$types], $ids);
        // Llama a bind_param con los parámetros combinados
        call_user_func_array([$stmt, 'bind_param'], $params);
        // Ejecuta la consulta
        $stmt->execute();

        // Verifica si la eliminación fue exitosa
        if ($stmt->affected_rows > 0) {
            echo "Registros eliminados correctamente.";
        } else {
            echo "Error al eliminar los registros.";
        }

        // Cierra la consulta preparada
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
} else {
    echo "ID no proporcionado.";
}
