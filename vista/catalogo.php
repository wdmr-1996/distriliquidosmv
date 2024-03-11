<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
</head>

<body>
    <nav class="navbar">
        <div class="contenedorlogo">
            <img class=" logo" src="../imagenes/logoDistriliquidos.png" alt="">
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

    <div class="cuerpoCentral">
        <form class="contenedorFiltro">
            <label for="agua">
                <input class="filtro" name="filtro" type="radio" id="agua" value='agua'>Agua
            </label>

            <label for="hidratante">
                <input class="filtro" name="filtro" type="radio" id="hidratante" value='hidratante'>Hidratante
            </label>

            <label for="gaseosa">
                <input class="filtro" name="filtro" type="radio" id="gaseosa" value='gaseosa'>Gaseosa
            </label>

            <label for="gaseosas-cero-calorias">
                <input class="filtro" name="filtro" type="radio" id="gaseosas-cero-calorias" value='gaseosas-cero-calorias'>Cero calorias
            </label>

            <label for="cerveza-licor">
                <input class="filtro" name="filtro" type="radio" id="cerveza-licor" value='cerveza-licor'>Cervezas y licores
            </label>
            
            <label for="energizante">
                <input class="filtro" name="filtro" type="radio" id="energizante" value='energizante'>Energizantes
            </label>

            <label for="jugos-refrescos">
                <input class="filtro" name="filtro" type="radio" id="jugos-refrescos" value='jugos-refrescos'>Jugos y refrescos
            </label>

            <label for="te-infusiones">
                <input class="filtro" name="filtro" type="radio" id="te-infusiones" value='te-infusiones'>Te e infusiones
            </label>

            <label for="soda-mezclador">
                <input class="filtro" name="filtro" type="radio" id="soda-mezclador" value='soda-mezclador'>Sodas y mezcladores
            </label>
        </form>

        <div class="contenedorCatalogo">
            <?php
            include("../modelo/conexion.php");

            // Iniciar la sesión si no está iniciada
            if (!isset($_SESSION['productosCarrito'])) {
                $_SESSION['productosCarrito'] = array();
            }

            // Verificar si se hizo clic en el botón agregar
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAgregar'])) {
                // Obtener el id del producto
                $idProducto = $_POST['idProducto'];

                // Agregar el id del producto al array de productos en el carrito
                $_SESSION['productosCarrito'][] = $idProducto;

                // Imprimir el contenido de la sesión para verificar
                //var_dump($_SESSION['productosCarrito']);
            
                // Puedes redirigir a otra página después de agregar al carrito si es necesario
                // header("Location: otra_pagina.php");
            }

            // Obtener datos de la base de datos
            $sql = $conexion->query("select * from productos");
            while ($datos = $sql->fetch_object()) {
<<<<<<< Updated upstream
            ?>
=======
                ?>
>>>>>>> Stashed changes
                <form method="post" class="producto <?= $datos->tipoBebida ?>" action="catalogo.php">
                    <input class="idProducto" name="idProducto" type="hidden" value="<?= $datos->idProducto ?>">
                    <img src="../<?= $datos->rutaImagen ?>" alt="Producto 1" class="imgProducto">
                    <h3 class="tituloProducto"><?= $datos->nombre ?></h3>
                    <p class="precioProducto">$<?= $datos->precioVenta ?></p>
                    <button class="btnAgregar" name="btnAgregar">Agregar</button>
                </form>
            <?php }
            ?>
        </div><!-- final del contenedor del catalogo -->

    </div>

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
                        Autorizo el tratamiento de mis datos personales de acuerdo con la <a
                            href="https://www.ejemplo.com">Política de Tratamiento de datos personales</a>
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
    <script>
<<<<<<< Updated upstream
        //Yoiner Arreglo de checkbox
        function filtrarCheckbox(subcategoria) {
            // Desactiva todos los checkboxes
            var checkBoxes = document.querySelectorAll('.checkBox');
            checkBoxes.forEach(function(checkBox) {
                checkBox.checked = false;
            });

            // Activa el checkbox seleccionado
            var checkboxSeleccionado = document.getElementById(subcategoria);
            checkboxSeleccionado.checked = true;

            // Obtén todos los productos
            var productos = document.querySelectorAll('.producto');
=======
        // Obtener todos los inputs del formulario 'categoria'
        var filtros = document.querySelectorAll('.filtro');
>>>>>>> Stashed changes

        // Añadir un evento de cambio a cada input de clase filtro
        filtros.forEach(function (filtro) {
            filtro.addEventListener('change', function () {
                var tipoProducto = this.value;

<<<<<<< Updated upstream
            // Muestra solo los productos que tienen la clase deseada
            var productosFiltrados = document.querySelectorAll('.' + subcategoria);
            productosFiltrados.forEach(function(productoFiltrado) {
                productoFiltrado.style.display = 'block';
            });
        }


        function quitarChecked() {
            var checkBoxes = document.querySelectorAll('.checkBox');
            checkBoxes.forEach(function(checkBox) {
                checkBox.checked = false;
            });
        }
        //fin
    </script>

=======
                // Obtén todos los productos
                var productos = document.querySelectorAll('.contenedorCatalogo .producto');

                // Oculta todos los productos
                productos.forEach(function (producto) {
                    producto.style.display = 'none';
                });

                // Mostrar los productos de la categoría seleccionada
                var productosFiltrados = document.querySelectorAll('.contenedorCatalogo .producto.' + tipoProducto);
                productosFiltrados.forEach(function (producto) {
                    producto.style.display = 'block';
                });
            });
        });
    </script>
>>>>>>> Stashed changes
</body>

</html>