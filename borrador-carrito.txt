<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="contenedorlogo">
            <img class=" logo"src="../imagenes/logoDistriliquidos.png" alt="">
        </div>
        <div class="nombreEmpresa">Distriliquidos MV</div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <!--Cada etiqueta <span class="bar"></span>
            corresponde a una barra del boton hamburguesa-->
        </div>
        <div class="menu">
            <a href="login.php">
                <button>
                    <i class="fa-solid fa-user"></i>
                    Log in
                </button>
            </a>
            <a href="carrito.php">
                <button>
                    <i class="fa-solid fa-cart-shopping"></i>
                    Carrito
                </button>
            </a>
            <a href="catalogo.php">
                <button>
                    <i class="fa-solid fa-layer-group"></i>
                    Catálogo
                </button>
            </a>
        </div>
    </nav>

    <!-- INICIO DEL CARRITO DE COMPRAS -->
    <article class="bodyCarrito">
        
        <div class="carritoContainer">
            <?php
                include("../modelo/conexion.php");
                //include("..\controlador\carritoEliminar.php");
                //include("../controlador/plusMinus.php");

                // Verificar si hay productos en el carrito
                if (!empty($_SESSION['productosCarrito'])) {
                    // Obtener los productos del carrito desde la base de datos
                    $productosCarrito = implode(",", $_SESSION['productosCarrito']);
                    $sql = $conexion->query("SELECT * FROM productos WHERE idProducto IN ($productosCarrito)");

                    while ($datos = $sql->fetch_object()) {

                        // Crear un array asociativo para cada producto
                        $itemCarrito = array(
                            'id' => $datos->idProducto,
                            'nombre' => $datos->nombre,
                            'precio' => $datos->precioVenta,
                            'cantidad' => 1, // Puedes inicializar la cantidad como desees
                            'subtotal' => 0, // Puedes inicializar el subtotal como desees
                        );
                        // Calcular el subtotal (por ejemplo, cantidad * precio)
                        $itemCarrito['subtotal'] = $itemCarrito['cantidad'] * $itemCarrito['precio'];
                        
                        // Agregar el array del producto al array principal
                        $itemsCarrito[] = $itemCarrito;
                    ?>
                    
                    <form class="productoCarrito" method="post" action="../controlador/carritoEliminar.php">
                        <!---action="../controlador/carritoEliminar.php"-->
                        <input type="hidden" name="idProducto" value="<?=$datos->idProducto?>">    
                        <section>
                            <img src="../<?=$datos->rutaImagen?>" alt="">
                        </section>
                        <article>
                            <span class="productoNombre"><?=$datos->nombre?></span>
                            <span class="precio">Unidad: $<?=$datos->precioVenta?></span>
                            <div class="cantidadProducto">
                                <button type="submit" class="minus" data-id="<?=$datos->idProducto?>" name="btnMinus">-</button>
                                <span type="submit" class="cantidadNumero" id="cantidadNumero<?=$datos->idProducto?>">1</span>
                                <button class="plus" data-id="<?=$datos->idProducto?>" name="btnPlus">+</button>
                            </div>
                        </article>
                        <section class="subtotal">
                            <span class="subTotalProducto">$10000,00</span>
                        </section>
                        <button type="submit" class="btnEliminarItem" name="btnEliminarItem">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
            <?php
                    }
                // Almacena el array principal en la sesión
                $_SESSION['itemsCarrito'] = $itemsCarrito;

                //Còdigo para imprimir los valores de itemCarrito
                foreach ($itemsCarrito as $item) {
                    echo '<p>ID: ' . $item['id'] . '</p>';
                    echo '<p>Nombre: ' . $item['nombre'] . '</p>';
                    echo '<p>Precio: $' . $item['precio'] . '</p>';
                    echo '<p>Cantidad: ' . $item['cantidad'] . '</p>';
                    echo '<p>Subtotal: $' . $item['subtotal'] . '</p>';
                    echo '<hr>'; // Separador entre productos
                }
                

                } else {
                    echo "<p>El carrito está vacío.</p>";
                }

            ?>
        </div><!-- Final de los items del carrito -->


        <!--Inicio del resumen de compra del carrito--->
        <div class="resumenCompra">
            <section class="tituloResumen"><h3>Resumen de compra</h3></section>
            <div class="suma">
                <span>Subtotal:</span>
                <span id="subtotalValor">$0.00</span>
            </div>
            <div class="iva">
                <span>IVA (19%):</span>
                <span id="ivaValor">$0.00</span>
            </div>
            <div class="envio">
                <span>Costo de envío:</span>
                <span id="envioValor">$0.00</span>
            </div>
            <div class="total">
                <span>Total a pagar:</span>
                <span id="totalValor">$0.00</span>
            </div>
        </div>
    <!--Final del resumen de compras del carrito--->

    </article>
    <!-- FINAL DEL CARRITO DE COMPRAS -->

    <!-- INICIO DEL FOOTER -->
    <footer class="footer">
        <div class="redesSociales">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-brands fa-square-instagram"></i>
        </div>
        <span class="columnasFooter">
            <div class="columnaFooter">
                <h3>Entérate de novedades</h3>
                
                <div class="contenidoColumnaFooter">
                    <label for="">
                        Enterate de promociones, descuentos, campañas y mucho màs
                    </label>
                    <input type="email" placeholder="Email" class="inputCorreo">

                    <input type="checkbox" class="inputCheckbox">
                    <label for="">
                        Autorizo el tratamiento de mis datos personales de acuerdo con la <a href="https://www.ejemplo.com">Política de Tratamiento de datos personales</a>
                    </label>

                    <button type="submit" class="footer-button">Suscribirse</button>
                </div>
            </div>

            <div class="columnaFooter">
                <h3>Contactanos</h3>
                <span class="contenidoColumnaFooter">
                    <ul>
                        <li><i class="fa-solid fa-envelope"></i> distriliquidos@gmail.com</li>
                        <li><i class="fa-brands fa-square-whatsapp"></i> 3053274457</li>
                        <li><i class="fa-solid fa-location-dot"></i> Ubicación</li>
                    </ul>
                </span>
            </div>


            <div class="columnaFooter">
            <h3>Sobre nosotros</h3>
                <span class="contenidoColumnaFooter">
                    <ul>
                        <li>Misión</li>
                        <li>Visión</li>
                        <li>Historia</li>
                    </ul>
                </span>
            </div>

            <div class="columnaFooter">
            <h3>Políticas</h3>
                <span class="contenidoColumnaFooter">
                    <ul>
                        <li>Seguridad de tu información</li>
                        <li>Ventas y devoluciones</li>
                        <li>Envios y entregas</li>
                        <li>Garantías</li>
                    </ul>
                </span>
            </div>
        </span>
    </footer>
    <!-- FINAL DEL FOOTER -->
    
    <!--Aquí importamos los estilos css-->
    <script src="./style.js"></script>
    <!--En header.js se programa el boton hamburguesa-->
    <script src="./header.js"></script>
    <script src="https://kit.fontawesome.com/9371cd63b1.js" crossorigin="anonymous"></script>

</body>
</html>