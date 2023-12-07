<?php
include("../modelo/conexion.php");

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $tipoBebida = $_POST["type"];
    $marca = ($_POST["brand"] === "otras") ? $_POST["newBrand"] : $_POST["brand"];
    $sabor = $_POST["flavor"];
    $descripcion = $_POST["description"];
    $material = $_POST["material"];
    $capacidad = $_POST["capacity"];
    $unidades = $_POST["units"];
    $nombreProducto = $_POST["productName"];
    $precioVenta = $_POST["price"];
    $precioCompra = $_POST["cost"];
    $existencias = $_POST["stock"];

    // Verifica si el archivo de imagen se ha enviado correctamente
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Obtiene el tipo de imagen
        $tipoImagen = exif_imagetype($_FILES["image"]["tmp_name"]);

        // Verifica si el tipo de imagen es válido
        if ($tipoImagen !== false && ($tipoImagen === IMAGETYPE_JPEG || $tipoImagen === IMAGETYPE_PNG || $tipoImagen === IMAGETYPE_WEBP)) {
            // Ruta donde se guardarán las imágenes
            $ruta_destino = $_SERVER['DOCUMENT_ROOT'] . '/distriliquidosmv/uploads/';

            // Obtener información sobre el archivo subido
            $nombre_archivo = basename($_FILES["image"]["name"]);
            $rutaCompleta = $ruta_destino . $nombre_archivo;
            $imagen =$nombre_archivo; // 

            // Mueve el archivo a la carpeta de destino
            move_uploaded_file($_FILES["image"]["tmp_name"], $rutaCompleta);

            // Obtener la ruta relativa
            $rutaBase = "C:/xampp/htdocs/distriliquidosmv/";
            $rutaRelativa = str_replace($rutaBase, "", $rutaCompleta);
            $rutaImagen = $rutaRelativa;
        } else {
            echo "Tipo de archivo no válido. Solo se permiten archivos con formato JPEG, PNG o WEBP.";
            exit;
        }
    } else {
        echo "Error al subir el archivo de imagen.";
        exit;
    }

    // Inserta los datos en la base de datos
    $query = "INSERT INTO productos (tipoBebida, marca, sabor, descripAdicional, material, capacidad, unidades, nombre, precioVenta, precioCompra, existencias, imagen, rutaImagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);

    // Verifica si la preparación fue exitosa
    if ($stmt) {
        // Asocia los parámetros y ejecuta la consulta
        $stmt->bind_param("sssssdisddiss", $tipoBebida, $marca, $sabor, $descripcion, $material, $capacidad, $unidades, $nombreProducto, $precioVenta, $precioCompra, $existencias, $imagen, $rutaImagen);
        $stmt->execute();

        // Verifica si la inserción fue exitosa
        if ($stmt->affected_rows > 0) {
            echo '<div class="alert alert-success">Producto ingresado correctamente</div>';
            header("Location: ../vista\adminIngresoProductos.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">Error al ingresar el producto: ' . $stmt->error . '</div>';
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