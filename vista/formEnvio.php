<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleEnvio.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../vista/envio.js">
    <title>Datos del pago</title>
</head>

<body>
    <nav class="navbar">
        <div class="contenedorlogo">
            <img class=" logo" src="./logoDistriliquidos.png" alt="">
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
            <a href="signinSelect.php">
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
    <!-- FINAL DEL HEADER-->


    <!-- FORMULARIO DE PAGOS-->
    <div class="contenedorFormularioPago">
        <h1>Agregar Domicilio</h1>

        <div id="contenedor">

            <form action="../controlador/datosEnvio.php" method="post" id="formulario">

            <label for="nombre_apellido" class="form-label">Nombre y apellido</label>
            <input type="text" id="nombre_apellido" name="nombre_apellido" class="form-input" required>

            <input style="margin-left: 20px;" class="form-input" type="tel" pattern="[0-9]{10}" maxlength="10"
                placeholder="Número de contacto" name="celular" required>

            <label class="form-label" for="correo">Correo</label>
            <input class="form-input" type="email" name="correo" placeholder="Correo electronico" required>

            <label class="form-label" for="barriosSelect">Barrio</label>

            <select class="form-input" id="barriosSelect" name="barriosSelect" class="js-example-basic-single" required>
                <option value=""></option>
                <option value="11 de noviembre">11 de Noviembre</option>
                <option value="13 de junio">13 de Junio</option>
                <option value="20 de julio">20 de julio</option>
                <option value="Albornos">Albornos</option>
                <option value="Alcibia">Alcibia</option>
                <option value="Almirante Colon">Almirante Col&oacute;n</option>
                <option value="Alto bosque">Alto bosque</option>
                <option value="Altos de san isidro">Altos de San Isidro</option>
                <option value="Amberes">Amberes</option>
                <option value="Anita">Anita</option>
                <option value="Antonio jose de sucre">Antonio Jos&eacute; de Sucre</option>
                <option value="Armenia">Armenia</option>
                <option value="Arroz barato">Arroz barato</option>
                <option value="Barlovento">Barlovento</option>
                <option value="Barrio chino">Barrio Chino</option>
                <option value="Barrio obrero">Barrio Obrero</option>
                <option value="Bellavista">Bellavista</option>
                <option value="Blas de lezo">Blas de Lezo</option>
                <option value="Bocagrande">Bocagrande</option>
                <option value="Bosquesito">Bosquesito</option>
                <option value="Boston">Boston</option>
                <option value="Britani">Britania</option>
                <option value="Bruselas">Bruselas</option>
                <option value="Buenos aires">Buenos Aires</option>
                <option value="Camguey">Camag&uuml;ey</option>
                <option value="Camilo torres">Camilo Torres</option>
                <option value="Canapote">Cabapote</option>
                <option value="Castillogrande">Castillogrande</option>
                <option value="Cavipetrol">Cavipetrol</option>
                <option value="Ceballos">Ceballos</option>
                <option value="Chambacu">Chamba&uacute;</option>
                <option value="Chipre">Chipre</option>
                <option value="Chiquinquira">Chiquinquir&aacute;</option>
                <option value="Cooperativo">Cooperativo</option>
                <option value="Corregimiento arroyo grande">Corregimiento Arroyo Grande</option>
                <option value="Corregimiento arroyo de piedra">Corregimiento Arroyo de Piedra</option>
                <option value="Corregimiento Baru">Corregimiento Bar&uacute;</option>
                <option value="Corregimiento bayunca">Corregimiento Bayunca</option>
                <option value="Corrgiemiento bocachica">Corregimiento Bocachica</option>
                <option value="Corregimiento caño del oro">Corregimiento Caño del Oro</option>
                <option value="Corregimiento cordialidad">Corregimiento Cordialidad</option>
                <option value="Corregimiento la boquilla">Corregimiento la Boquilla</option>
                <option value="Corregimiento pasacaballos">Corregimiento Pasacaballos</option>
                <option value="Corregimiento pontezuela">Corregimiento Pontezuela</option>
                <option value="Corregimiento punta canoa">Corregimiento Punta Canoa</option>
                <option value="Corregimiento santa ana">Corregimiento Santa Ana</option>
                <option value="Corregimiento sector membrillal">Corregimiento Sector Membrillal</option>
                <option value="Corregimiento sector variante">Corregimiento Sector Variante</option>
                <option value="Corregimiento tierra bomba">Corregimiento Tierra Bomba</option>
                <option value="Crespo">Crespo</option>
                <option value="Daniel lemaitre">Daniel Lemaitre</option>
                <option value="El bosque">El Bosque</option>
                <option value="El cabrero">El Cabrero</option>
                <option value="El campestre">El Campestre</option>
                <option value="El carmen">El Carmen</option>
                <option value="El centro">El Centro</option>
                <option value="El country">El Country</option>
                <option value="El ecuador">El Ecuador</option>
                <option value="El espinal">Eñ Espinal</option>
                <option value="El gallo">El Gallo</option>
                <option value="El nazareno">El Nazareno</option>
                <option value="El pozon">El poz&oacute;n</option>
                <option value="El prado">El Prado</option>
                <option value="El recreo">El Recreo</option>
                <option value="El reposo">El Reposo</option>
                <option value="El rubi">El Rub&iacute;</option>
                <option value="El silencio">El Silencio</option>
                <option value="El socorro">El Socorro</option>
                <option value="Escallon villa">Escall&oacute; Villa</option>
                <option value="España">España</option>
                <option value="Fredonia">Fredonia</option>
                <option value="Getsemani">Getsemani</option>
                <option value="Henequen">Henequ&eacute;n</option>
                <option value="Jorge eliecer gaitan">Jorge Eliecer Gait&aacute;n</option>
                <option value="Jose antonio galan">Jos&eacute; Antonio Gal&aacute;n</option>
                <option value="Juan XXIII">Juan XXIII</option>
                <option value="Junin">Jun&iacute;n</option>
                <option value="La campiña">La Campiña</option>
                <option value="La candelaria">La Candelaria</option>
                <option value="La castellana">La Castellana</option>
                <option value="La concepcion">La Concepci&oacute;n</option>
                <option value="La consolata">La Consolata</option>
                <option value="La esmeralde1">La Esmeralda 1</option>
                <option value="La esmeralda2">La Esmeralda 2</option>
                <option value="La esperanza">La Esperanza</option>
                <option value="La floresta">La Floresta</option>
                <option value="la florida">La Florida</option>
                <option value="La gloria">La Gloria</option>
                <option value="La maria">La Mar&iacute;a</option>
                <option value="La matuna">La Matuna</option>
                <option value="La plaza">La Plaza</option>
                <option value="La providencia">La Providencia</option>
                <option value="La quinta">La Quinta</option>
                <option value="La sierrita">La Sierrita</option>
                <option value="La troncal">La Troncal</option>
                <option value="La victoria">La Victoria</option>
                <option value="Laguito">Laguito</option>
                <option value="Las americas">Las Am&eacute;ricas</option>
                <option value="Las brisas">Las Brisas</option>
                <option value="Las delicias">Las Delicias</option>
                <option value="Las gaviotas">Las Gaviotas</option>
                <option value="Las palmas">Las Palmas</option>
                <option value="Las palmeras">Las Palmeras</option>
                <option value="Libertador">Libertador</option>
                <option value="Lo amador">Lo Amador</option>
                <option value="Loma fresca">Loma Fresca</option>
                <option value="Los almendros">Los Almendros</option>
                <option value="Los alpes">Los Alpes</option>
                <option value="Los calamares">Los Calamares</option>
                <option value="Los caracoles">Losa Caracoles</option>
                <option value="Los cerros">Los Cerros</option>
                <option value="Los comuneros">Los Comuneros</option>
                <option value="Los corales">Los Corales</option>
                <option value="Los Ejecutivos">Los Ejecutivos</option>
                <option value="Los jardines">Los Jardines</option>
                <option value="Los laureles">Los Laureles</option>
                <option value="Los santanderes">Los Santanderes</option>
                <option value="Los angeles">Los &Aacute;ngeles</option>
                <option value="Luis carlos_galan">Luis Carlos Gal&aacute;n</option>
                <option value="Manga">Manga</option>
                <option value="Marbella">Marbella</option>
                <option value="Martinez martelo">Mart&iacute;nes Martelo</option>
                <option value="Mar&iacute; Cano"></option>
                <option value="Mirador de nuevo bosque">Mirador de Nuevo Bosque</option>
                <option value="Nariño">Nariño</option>
                <option value="Nelson mandela">Nelson Mandela</option>
                <option value="Nueva dely">Nueva Dely</option>
                <option value="Nueva granada">Nuewva Granda</option>
                <option value="Nueva jerusalen">Nueva Jerusal&eacute;n</option>
                <option value="Nueva villa fany">Nueva Villa Fany</option>
                <option value="Nueve de abril">Nueve de Abril</option>
                <option value="Nuevp paraiso">Nuevo Para&iacute;so</option>
                <option value="Nuevo porvenir">nuevo Porvenir</option>
                <option value="Olaya:herrera">Olaya Herrera</option>
                <option value="Palestina">Palestina</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Paraiso">Para&iacute;so</option>
                <option value="Paulo VI1">Paulo VI 1</option>
                <option value="Paulo VI2">Paulo VI 2</option>
                <option value="Pedro salazar">Pedro Salazar</option>
                <option value="Petare">Petare</option>
                <option value="Pie de la popa">Pie de la Popa</option>
                <option value="Pie del cerro">Pie del Cerro</option>
                <option value="Piedra de bolivar">Piedra de Bol&iacute;var</option>
                <option value="Policarpa">Policarpa</option>
                <option value="Puerta de hierro">Puerta de Hierro</option>
                <option value="Republica de chile">Rep&uacute;blica de Chile</option>
                <option value="Republica de venezuela">Rep&uacute;blica de Venezuela</option>
                <option value="Republica del caribe">Rep&uacute;blica del Caribe</option>
                <option value="Republica del libano">Rep&uacute;blica del L&iacute;bano</option>
                <option value="San bernardo">San Bernardo</option>
                <option value="San bernardo de asís">San Bernardo de As&iacute;s</option>
                <option value="San diego">San Diego</option>
                <option value="San fernando">San Fernando</option>
                <option value="San isidro">San Isidro</option>
                <option value="San jose de los campanos">San j&oacute;se de los Campanos</option>
                <option value="San pedro">San Pedro</option>
                <option value="San pedro martir">San Pdero M&aacute;rtir</option>
                <option value="San pedro y libertad">San Pedro y Libertad</option>
                <option value="Santa clara">Santa Clara</option>
                <option value="Santa lucia">Santa Luc&iacute;a</option>
                <option value="Santa maria">Santa Mar&iacute;a</option>
                <option value="Santa monica">Santa M&oacute;nica</option>
                <option value="Santillana de los patios">Santillana de los Patios</option>
                <option value="Sectores unidos">Sectores Unidos</option>
                <option value="Siete de agosto">Siete de Agosto</option>
                <option value="Simon bolivar">Sim&oacute;n Bol&iacute;var</option>
                <option value="Tacarigua">Tacarigua</option>
                <option value="Ternera">Ternera</option>
                <option value="Tesca nuevo">Tesca Nuevo</option>
                <option value="Tesca viejo">Tesca Viejo</option>
                <option value="Torices">Torices</option>
                <option value="Viejo porvenir">Viejo Porvenir</option>
                <option value="Villa estrella">Vieja Estrella</option>
                <option value="Villa hermosa">Villa Hermosa</option>
                <option value="Villa rosita">Villa Rosita</option>
                <option value="Villa rubia">Villa Rubia</option>
                <option value="Villa sandra1">Villa Sandra 1</option>
                <option value="Villa sandra2">Villa Sandra 2</option>
                <option value="Virgen del carmen">Virgen del Carmen</option>
                <option value="Zaragocilla">Zaragocilla</option>

            </select>

            <div class="contenedor2">

                <div class="par">
                    <label class="tipo_de_calle" for="tipo_de_calle">Tipo</label>
                    <select style="margin-right: 10px;" name="tipo_de_calle" id="tipo_de_calle" required>
                        <option value=""></option>
                        <option value="Avenida">Avenida</option>
                        <option value="Avenida calle">Avenida Calle</option>
                        <option value="Avenida carrera">Avenida Carrera</option>
                        <option value="Calle">Calle</option>
                        <option value="Carrera">Carrera</option>
                        <option value="Circular">Circular</option>
                        <option value="Circunvalar">Circunvalar</option>
                        <option value="Diagonal">Diagonal</option>
                        <option value="Manzana">Manzana</option>
                        <option value="Transversal">Transversal</option>
                        <option value="Via">V&iacute;a</option>
                    </select>
                </div>

                <div class="par">
                    <label class="form-label1" id="cambio_tipo_calle" for="avenida">Avenida</label>

                    <input class="form-input1" type="text" id="avenida" name="avenida" required>
                    <p class="contexto">Complete solo con el nombre y el prefijo. Ej:22,sur.</p>
                </div>


                <div class="par">
                    <label style="margin-left: 10px;" for="#numero">N&uacute;mero #</label>
                    <input class="input_peq" id="bloq1" name="bloq1" type="text"><br>
                </div>

                <div class="par">
                    <label id="span">-</label>
                    <input style="margin-right: 10px;" class="input_peq" id="bloq2" name="bloq2" type="text">
                </div>


                <div class="par">
                    <input style="margin-top: 45px;" id="checkbox" type="checkbox">
                    <p class="contexto">No tengo N&uacute;mero</p>
                </div>
            </div>

            <label style="margin-top: 20px;" for="referencia">Referencias adicionales de direcci&oacute;n</label>
            <textarea name="referencia" id="referencia" cols="30" rows="10"
                placeholder="Descripcion de la fachada, puntos de referencia para encontrarla, indicaciones de seguridad, etc."
                required></textarea>


            <div class="boton">
                <button type="submit">Continuar</button>
            </div>

                <div class="boton2">
                    <button type="submit"><a href="../vista/catalogo.php">Regresar</a></button>
                </div>
            </form>
        </div>
    </div>
    <!-- FINAL FORMULARIO DE PAGOS -->


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


    <!--Scrips de Yoiner-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#barriosSelect').select2();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#barriosSelect').select2();
        });
    </script>
</body>

</html>