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

    <div class="contenedorInventario">
        <h2 class="h2Inventario">Inventario de productos</h2>
        <!-- Botón para cargar el inventario -->
        <button class="btnInventario" id="btnCargarInventario" onclick="cargarInventario()">Cargar Inventario</button>
        <button class="btnInventario" id="btnIrRegistrarProducto" onclick="irRegistrarProducto()">Registrar productos</button>


        <!-- Contenedor para la tabla de inventario -->
        <div id="tablaInventarioContainer"></div>

        <script>

            function irRegistrarProducto(idProducto) {
                // Redirige al formulario donde se registran los productos
                window.location.href = `../vista/adminIngresoProductos.php`;
            }
            // Función para cargar el inventario
            function cargarInventario() {
                // Hacer una solicitud al servidor para obtener los datos
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Manejar la respuesta y construir la tabla
                        document.getElementById("tablaInventarioContainer").innerHTML = this.responseText;
                    }
                };
                xhr.open("GET", "../controlador/listarInventario.php", true);
                xhr.send();
            }

            function confirmarBorrar(idProducto) {
                if (confirm('¿Estás seguro de que deseas borrar este registro?')) {
                    borrarRegistro(idProducto);
                }
            }

            function borrarRegistro(idProducto) {
                // Hacer una solicitud al servidor para borrar el registro
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        // Manejar la respuesta del servidor
                        alert(this.responseText);
                        // Recargar el inventario después de borrar
                        cargarInventario();
                    }
                };
                xhr.open("GET", "../controlador/eliminarRegistro.php?id=" + idProducto, true);
                xhr.send();
            }
            function editarRegistro(idProducto) {
                // Redirige a adminEditarProducto.php con el ID del producto como parámetro
                window.location.href = `../vista/adminEditarProducto.php?id=${idProducto}`;
            }
        </script>
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