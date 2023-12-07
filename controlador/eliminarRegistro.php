<?php
// Archivo eliminarRegistro.php

// Incluye el archivo de conexión a la base de datos
include("../modelo/conexion.php");

// Verifica si se proporciona un ID válido
if (isset($_GET['id'])) {
    $idProducto = $_GET['id'];

    // Prepara la consulta para eliminar el registro
    $query = "DELETE FROM productos WHERE idProducto = ?";
    $stmt = $conexion->prepare($query);

    if ($stmt) {
        // Asocia el parámetro y ejecuta la consulta
        $stmt->bind_param("i", $idProducto);
        $stmt->execute();

        // Verifica si la eliminación fue exitosa
        if ($stmt->affected_rows > 0) {
            echo ", registro eliminado correctamente.";
        } else {
            echo "Error al eliminar el registro: " . $stmt->error;
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
?>
