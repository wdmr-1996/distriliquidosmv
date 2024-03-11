<?php


    // Puedes acceder a los elementos de productos así:
    echo "El nombre del primer itemCarrito es: " . $productos[0]['nombre'] . "\n";

    $idProducto = 789;

    $indiceEncontrado = null;

    foreach ($productos as $indice => $producto) {
        if ($producto['id'] == $idProducto) {
            $indiceEncontrado = $indice;
            break; // Termina el bucle una vez que se encuentra la coincidencia
        }
    }

    if ($indiceEncontrado !== null) {
        echo "El índice es: " . $indiceEncontrado . "\n";
    } else {
        echo "No se encontró ningún elemento con id igual a $idProducto.\n";
    }
    echo '<br><br><br>';

?>