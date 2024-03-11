<?php

include("../modelo/conexion.php");

// Consulta para obtener todos los registros de la tabla productos
$query = "SELECT * FROM productos";
$resultado = $conexion->query($query);

// Construir la tabla con los resultados
if ($resultado->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th></th><!-- Columna para el checkbox -->
                <th></th> <!-- Columna para el botón Editar -->
                <th>ID</th>
                <th>Tipo de Bebida</th>
                <th>Marca</th>
                <th>Sabor</th>
                <th>Descripción Adicional</th>
                <th>Material</th>
                <th>Capacidad</th>
                <th>Unidades</th>
                <th>Nombre</th>
                <th>Precio Venta</th>
                <th>Precio Compra</th>
                <th>Existencias</th>
            </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>
                    <input type='checkbox' value='{$fila['idProducto']}' onclick='mostrarBotonEliminar()'>
                </td>
                <td>
                    <button onclick='editarRegistro({$fila['idProducto']})'>Editar</button>
                </td>
                <td>{$fila['idProducto']}</td>
                <td>{$fila['tipoBebida']}</td>
                <td>{$fila['marca']}</td>
                <td>{$fila['sabor']}</td>
                <td>{$fila['descripAdicional']}</td>
                <td>{$fila['material']}</td>
                <td>{$fila['capacidad']}</td>
                <td>{$fila['unidades']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['precioVenta']}</td>
                <td>{$fila['precioCompra']}</td>
                <td>{$fila['existencias']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No hay productos en el inventario.";
}

// Cierra la conexión a la base de datos
$conexion->close();
?>