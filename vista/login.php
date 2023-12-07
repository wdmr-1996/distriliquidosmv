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

    <!-- FORMULARIO DEL LOG IN -->
    <article class="bodyLogIn">
        <div class="logInContainer">
            <h2 class="h2">Iniciar Sesión</h2>
            <form class="credenciales" method="post">
                <?php
                    include ("../controlador/logIn.php");
                ?>
                <input type="text" name="documento" class="formItem" placeholder="Documento de identificación" required>
                <input type="password" name="contrasena" class="formItem" placeholder="Contraseña" required>
                <button type="submit" class="formItem button">Inicio de sesión</button>
            </form>
            <div class="footerLogIn">
                <a href="../vista/signinSelect.php" class="formItem">¿Aún no te has registrado?<a>
                <!--<a href="" class="formItem">¿Olvidaste tu contraseña?</a>-->
            </div>
        </div>
    </article>
    <!-- FIN DEL FORMULARIO DEL LOG IN -->

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