<?php
include("../modelo/conexion.php");

// Verificar si se proporciona un ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtener el ID del producto
    $productId = $_GET['id'];

    // Consulta para obtener los datos del producto
    $query = "SELECT * FROM productos WHERE id = $productId";
    $result = mysqli_query($conexion, $query);

    // Verificar si se obtuvieron resultados
    if ($result && mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
    } else {
        // Manejar el caso en que no se encuentre el producto
        echo "No se encontró el producto con el ID proporcionado.";
        exit; // Puedes ajustar esto según tus necesidades
    }
} else {
    // Manejar el caso en que no se proporciona un ID válido
    echo "ID de producto no válido.";
    exit; // Puedes ajustar esto según tus necesidades
}
?>

<!-- Resto de tu código HTML -->

<!-- Setear los valores en los campos correspondientes -->
<input type="text" id="type" name="type" value="<?php echo $producto['tipoBebida']; ?>" required>
<!-- Repite lo anterior para los demás campos -->
