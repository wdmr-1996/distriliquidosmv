<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso productos</title>

</head>
<body>
    <nav class="navbar">
        <div class="contenedorlogo">
            <img class=" logo"src="./logoDistriliquidos.png" alt="">
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

    <!-- FORMULARIO PARA EL INGRESO DE PRODUCTOS -->
    <div class="contenedorIngresoProductos">
        <form id="formInventory" class="formInventory" method="post" enctype="multipart/form-data">
            <h2>Registro de nuevos productos</h2>
            <?php
                include ("../controlador/registrarProducto.php");
            ?>
            <span>
                <label for="type">Tipo de bebida </label>
                <select id="type" name="type">
                    <option disabled selected value="">Selecciona un tipo</option>
                    <option value="agua">Agua</option>
                    <option value="hidratante">Hidratante</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="gaseosas-cero-calorias">Gaseosas-cero-calorias</option>
                    <option value="cerveza-licor">Cerveza-licor</option>
                    <option value="energizante">Energizante</option>
                    <option value="jugos-refrescos">Jugos-refrescos</option>
                    <option value="te-infusiones">Te-infusiones</option>
                    <option value="soda-mezclador">Soda-mezclador</option>
                </select>
            </span>

            <span>
                  <label for="brand">Marca</label>
                    <select id="brand" name="brand" onchange="handleBrandChange()">
                        <option disabled selected value="">Selecciona una marca</option>
                        <option value="H2O">H2O</option>
                        <option value="Brisa">Brisa</option>
                        <!-- Agrega otras marcas aquí -->
                        <option value="otras">Otras</option>
                    </select>
                </label>
            </span>

            <span id="newBrandContainer" style="display:none;">
                <label for="newBrand">Nombre de la nueva marca:</label>
                <input type="text" id="newBrand" name="newBrand" required>
            </span>

            <span>
                <label for="flavor">Sabor:</label>
                <input type="text" id="flavor" name="flavor" placeholder="Ej. original, manzana, naranja, uva, etc">
            </span>

            <span>
                <label for="description">Descripción:</label>
                <input type="text" id="description" name="description" placeholder="Ej. cero calorías, con gas, sin gas">
            </span>

            <span>
                <label for="material">Material:</label>
                <input type="text" id="material" name="material" placeholder="Ej. PET, lata, vidrio">
            </span>

            <span>
                <label for="capacity">Capacidad (ml):</label>
                <input type="number" step="any" id="capacity" name="capacity" placeholder="Ej. 250, 300, 750, 1000, 1200, 2000, 2500">
            </span>

            <span>
                <label for="units">Unidades por producto:</label>
                <input type="number" id="units" name="units" placeholder="Ej. 1, 2, 6, 12">
            </span>

            <span>
                <label for="productName">Nombre del producto:</label>
                <input type="text" id="productName" name="productName">
            </span>
            
            <span>
                <label for="price">Precio de venta:</label>
                <input type="number" step="0.01" id="price" name="price">
            </span>

            <span>
                <label for="cost">Precio de compra:</label>
                <input type="number" step="0.01" id="cost" name="cost">
            </span>

            <span class="cragarImagen">
                <label for="image">Cargar imagen del producto:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </span>

            <span>
                <label for="stock">Existencias:</label>
                <input type="number" id="stock" name="stock" placeholder="Numero de pacas">
            </span>


            <button type="submit">Ingresar</button>
        </form>
    </div>
    <!-- FIN DEL FORMULARIO PARA INGRESO DE PRODUCTOS -->

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
    <script>
        // JavaScript para cambiar el backgrpund al haber ingresado un valor o seleccionado una opción
        document.getElementById('formInventory').addEventListener('input', function(event) {
            var target = event.target;

            if (target.tagName === 'INPUT' || target.tagName === 'SELECT') {
                target.classList.add('valid');
            }
        });

        document.getElementById('formInventory').addEventListener('select', function(event) {
            var target = event.target;

            if (target.tagName === 'INPUT' || target.tagName === 'SELECT'){
                target.classList.add('valid');
            }
        });
        // puedes utilizar un condicional que use como parametro si el input o select está o no lleno
        // en vez de si se ha dado click sobre el input o no
    </script>
    <script>
        /** Script que reescribe el nombre del producto */
        document.getElementById('type').addEventListener('change', updateProductName);
        document.getElementById('brand').addEventListener('change', updateProductName);
        document.getElementById('newBrand').addEventListener('input', updateProductName);
        document.getElementById('flavor').addEventListener('input', updateProductName);
        document.getElementById('description').addEventListener('input', updateProductName);
        document.getElementById('material').addEventListener('input', updateProductName);
        document.getElementById('capacity').addEventListener('input', updateProductName);
        document.getElementById('units').addEventListener('input', updateProductName);
        
        function updateProductName() {
            var tipoBebida = document.getElementById('type').value + " ";
            var brand = document.getElementById('brand').value + " ";
            var newBrand = document.getElementById('newBrand').value + " ";
            var brandValue;
            if (newBrand.trim() !== '') {
                brandValue = newBrand;
            } else {
                barndValue = brand;
            }
            brandValue = brandValue + " ";
            var flavorValue = document.getElementById('flavor').value + " ";
            var description = document.getElementById('description').value + " ";
            var material = document.getElementById('material').value + " ";
            var capacidad = document.getElementById('capacity').value+" ml"+ " ";
            var unidades = document.getElementById('units').value+" unidad(es)"+ " ";

            var productNameInput = document.getElementById('productName');

            if (tipoBebida) {
            productNameInput.value = tipoBebida + brandValue + flavorValue + 
                                    description + material + capacidad + unidades;
            } else {
            productNameInput.value = "";
            }
        }
    </script>
    <script>
        /** Código para introducir la nueva marca */
        function handleBrandChange() {
            var brandSelect = document.getElementById("brand");
            var newBrandContainer = document.getElementById("newBrandContainer");
            var newBrandInput = document.getElementById("newBrand");
            if (brandSelect.value === "otras") {
                newBrandContainer.style.display = "flex";
                newBrandInput.required = true;
            } else {
                newBrandContainer.style.display = "none";
                newBrandInput.required = false;
            }
        }
        
    </script>
</body>
</html>