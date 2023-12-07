<?php
// Inicia la sesión
session_start();

// Verifica si se ha hecho clic en el botón plus o minus y realiza las operaciones correspondientes
if (isset($_POST['btnPlus'])) {
    $idProducto = $_POST['idProducto'];

    // Busca el producto en el array itemsCarrito
    $index = array_search($idProducto, array_column($_SESSION['itemsCarrito'], 'id'));

    // Incrementa la cantidad si se encuentra el producto
    if ($index !== false) {
        $_SESSION['itemsCarrito'][$index]['cantidad']++;
    }
} elseif (isset($_POST['btnMinus'])) {
    $idProducto = $_POST['idProducto'];

    // Busca el producto en el array itemsCarrito
    $index = array_search($idProducto, array_column($_SESSION['itemsCarrito'], 'id'));

    // Decrementa la cantidad si se encuentra el producto y la cantidad es mayor que 1
    if ($index !== false && $_SESSION['itemsCarrito'][$index]['cantidad'] > 1) {
        $_SESSION['itemsCarrito'][$index]['cantidad']--;
    }
}
?>
