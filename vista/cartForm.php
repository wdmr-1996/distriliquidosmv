<?php
    session_start();
    $producto1 = array(
        'id' => $datos->idProducto,
        'nombre' => $datos->nombre,
        'precio' => $datos->precioVenta,
        'cantidad' => 1,
        'subtotal' => 0,
    );
    $producto2 = array(
        'id' => 456,
        'nombre' => 'galletas',
        'precio' => 500,
        'cantidad' => 2,
        'subtotal' => 0,
    );
    $producto3 = array(
        'id' => 789,
        'nombre' => 'chocolate',
        'precio' => 1000,
        'cantidad' => 3,
        'subtotal' => 0,
    );
    $producto4 = array(
        'id' => 101,
        'nombre' => 'agua',
        'precio' => 800,
        'cantidad' => 1,
        'subtotal' => 0,
    );
    $producto5 = array(
        'id' => 202,
        'nombre' => 'snacks',
        'precio' => 1500,
        'cantidad' => 2,
        'subtotal' => 0,
    );
    // Almacenar todos los itemCarrito en itemsCarrito
    $productos = array($producto1, $producto2, $producto3, $producto4, $producto5);
    $_SESSION['productos'] = $productos;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form method='POST' action="cart.php">
        <span id='123' name='cantidad'>2</span>
        <button type="submit">cambiar</button>
    </form>

</head>
<body>
    
</body>
</html>