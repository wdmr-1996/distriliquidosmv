<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

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

    <!-- FORMULARIO SIGNIN EMPRESA -->
    <article class="bodySignin">
        <div class="signinContainer">
            <h2 class="h2">Registro como persona natural</h2>
            <?php
                include ("../controlador/registrarCliente.php");
            ?>
            <form class="credenciales" method="post" action="../controlador/registrarCliente.php">
                <div>
                    <article class="columnaSignin">
                        <select id="tipoDocumento" name="tipoDocumento" class="formItem" required>
                            <option value="" selected disabled>Documento de identidad</option>
                            <option value="cedula">Cédula de Ciudadanía</option>
                            <option value="cedulaExtranjeria">Cédula de Extranjería</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="tarjetaIdentidad">Tarjeta de Identidad</option>
                        </select>
                        <input type="text" name="numeroDoducmento" class="formItem" placeholder="Número del documento" required>
                        <input type="text" name="nombre" class="formItem" placeholder="Nombre" required>
                        <input type="text" name="apellido" class="formItem" placeholder="Apellido" required>
                    </article>
                    <article class="columnaSignin">
                        <input type="email" name="correo" class="formItem" placeholder="Correo" required>
                        <input type="password" name="contrasena" class="formItem" placeholder="contraseña" required>
                        <input type="number" name="celular" class="formItem" placeholder="Número de celular" required>
                        <input type="number" name="celularAlt" class="formItem" placeholder="Celular alternativo" >
                    </article>
                </div>
                <button type="submit" class="formItem button">Registrar</button>
            </form>
        </div>
    </article>
    <!-- FIN DEL FORMULARIO SIGNIN EMPRESA -->

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