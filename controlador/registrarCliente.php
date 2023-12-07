<?php
include("../modelo/conexion.php");

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $tipoDocumento = $_POST["tipoDocumento"];
    $numeroDocumento = $_POST["numeroDoducmento"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $celular = $_POST["celular"];
    //$celularALt = $_POST["celularAlt"];

    // Inserta los datos en la base de datos
    $query = "INSERT INTO clientepersona (tipoDocumento, numDocumento, nombres, apellidos, celular, correo, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);

    // Verifica si la preparación fue exitosa
    if ($stmt) {
        // Asocia los parámetros y ejecuta la consulta
        $stmt->bind_param("sssssss", $tipoDocumento, $numeroDocumento, $nombre, $apellido, $celular, $correo, $contrasena);
        $stmt->execute();

        // Verifica si la inserción fue exitosa
        if ($stmt->affected_rows > 0) {
            echo '<div class="alert alert-success">Producto ingresado correctamente</div>';
            header("Location: ../vista/catalogo.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">Error al ingresar se como usuario: ' . $stmt->error . '</div>';
        }

        // Cierra la consulta preparada
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}

?>