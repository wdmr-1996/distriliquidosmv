<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnEliminarItem'])) {
        // Obtener el id del producto a eliminar
        $idProductoEliminar = $_POST['idProducto'];

        // Buscar y eliminar el id del producto de $_SESSION['productosCarrito']
        $index = array_search($idProductoEliminar, $_SESSION['productosCarrito']);
        if ($index !== false) {
            unset($_SESSION['productosCarrito'][$index]);
        }
    }

    // Verifica si se ha hecho clic en el botón plus o minus y realiza las operaciones correspondientes
    if (isset($_POST['btnPlus'])) {

        $idProducto = $_POST['idProducto'];
        echo "id producto {$idProducto}";
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
    // Redirigir de nuevo a la página del carrito
    header("Location: ../vista/carrito.php");
    exit();

?>
