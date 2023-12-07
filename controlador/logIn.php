<?php
// Archivo de conexión a la base de datos (asegúrate de incluir la conexión aquí)
include("../modelo/conexion.php");


if (isset($_POST["documento"]) && isset($_POST["contrasena"])) {
    // Obtener los datos del formulario
    $documento = $_POST["documento"];
    $contrasena = $_POST["contrasena"];

    // Consultar la base de datos para verificar las credenciales
    $query = "SELECT * FROM clientepersona WHERE numDocumento=? AND contrasena=?";
    // Utilizamos consultas preparadas para evitar inyecciones SQL
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ss", $documento, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Las credenciales son válidas
        $usuario = $resultado->fetch_assoc(); // Obtener los datos del usuario

        if ($usuario['rol'] == 'administrador') {
            // Redirigir a admin.php si el rol es 'administrador'
            header("Location: ../vista/adminGestionInventario.php");
            exit();
        } elseif ($usuario['rol'] == 'cliente') {
            // Redirigir a cliente.php si el rol es 'cliente'
            header("Location: ../vista/cliente.php");
            exit();
        } else {
            // Si el rol no está especificado, mostrar un mensaje
            echo "No se ha especificado el rol del usuario.";
        }
    } else {
        // Las credenciales son inválidas, acceso denegado
        echo "Credenciales inválidas. Acceso denegado.";
    }
    // Si la conexión a la base de datos está abierta
    if ($conexion->ping()) {
    // Entonces cerrar la conexión a la base de datos 
        $conexion->close();
    }    
} else {
    //echo "No se enviaron datos del formulario.";
}


?>