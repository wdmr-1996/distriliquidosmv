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

    <!-- FORMULARIO PARA EL INGRESO DE PRODUCTOS -->
    <div class="contenedorIngresoProductos">
        <form id="formInventory" class="formInventory" method="post">
            <h2>Registro de nuevos productos</h2>
            <?php
                // Recupera el id
                $idProducto = isset($_GET['id']) ? $_GET['id'] : '';

                include ("../modelo/conexion.php"); 

                $sql = $conexion->query("SELECT * FROM productos WHERE idProducto = $idProducto");
                $datos = $sql->fetch_object();

                
            ?>
            <input id="idEditar" type="text" disabled value="<?=$idProducto?>" style="display: none;">

            <span>
                <label for="type">Tipo de Bebida:</label>
                <select id="type" name="type" required>
                    <option disabled value="">Selecciona un tipo</option>
                    <?php
                        $tiposBebida = array(
                            "agua", "hidratante", "gaseosa", "gaseosas_cero_calorias", "licor",
                            "cerveza", "energizante", "jugos_refrescos", "te_infusiones", "soda_mezclador"
                        );
                    
                        // Genera las opciones y preselecciona la opción correspondiente
                        foreach ($tiposBebida as $tipo) {
                            echo "<option value='$tipo'" . ($tipo === $datos->tipoBebida? ' selected' : '') . ">$tipo</option>";
                        }
                    ?>
                </select>
            </span>

            <span>
                <label for="brand">Marca</label>
                <select id="brand" name="brand" required onchange="handleBrandChange()">
                    <option disabled value="">Selecciona una marca</option>
                    <?php
                        // Definir las marcas disponibles
                        $marcasDisponibles = array("H2O", "Brisa", /* Agrega otras marcas aquí */ "otras");

                        // Verificar si la marca almacenada está en las marcas disponibles
                        $marcaAlmacenada = $datos->marca;
                        
                        foreach ($marcasDisponibles as $marca){
                            // Verificar si la marca almacenada coincide con la marca actual del bucle
                            $selected = ($marcaAlmacenada == $marca) ? "selected" : "";

                            echo "<option value='$marca' $selected>$marca</option>";
                        }

                        // Si la marca almacenada no está en las marcas disponibles, imprimir como opción seleccionada
                        if (!in_array($marcaAlmacenada, $marcasDisponibles)) {
                            echo "<option value='$marcaAlmacenada' selected>$marcaAlmacenada</option>";
                        }
                    ?>
                </select>
            </span>


            <span id="newBrandContainer" style="display:none;">
                <label for="newBrand">Nombre de la nueva marca:</label>
                <input type="text" id="newBrand" name="newBrand" value="<?=$datos->marca?>" required>
            </span>
            
            <span>
                <label for="flavor">Sabor</label>
                <input type="text" id="flavor" name="flavor" placeholder="Ej. original, manzana, naranja, uva, etc" value="<?=$datos->sabor?>" required>
            </span>

            <span>
                <label for="description">Descripción</label>
                <input type="text" id="description" name="description" value="<?=$datos->descripAdicional?>" required>
            </span>

            <span>
                <label for="material">Material</label>
                <input type="text" id="material" name="material" placeholder="Ej. PET, lata, vidrio" value="<?=$datos->material?>" required>
            </span>

            <span>
                <label for="capacity">Capacidad (ml)</label>
                <input type="number" id="capacity" name="capacity" placeholder="Ej. 250, 300, 750, 1000, 1200, 2000, 2500" value="<?=$datos->capacidad?>" required>
            </span>

            <span>
                <label for="units">Unidades por producto</label>
                <input type="number" id="units" name="units" placeholder="Ej. 1, 2, 6, 12" value="<?=$datos->unidades?>" required>
            </span>

            <span>
                <label for="productName">Nombre del producto</label>
                <input type="text" id="productName" name="productName" value="<?=$datos->nombre?>" required>
            </span>
            
            <span>
                <label for="price">Precio de venta</label>
                <input type="number" step="0.01" id="price" name="price" value="<?=$datos->precioVenta?>" required>
            </span>

            <span>
                <label for="cost">Precio de compra</label>
                <input type="number" step="0.01" id="cost" name="cost" value="<?=$datos->precioCompra?>" required>
            </span>

            <span class="cragarImagen">
                <label for="image">Cargar imagen del producto</label>
                <input type="file" id="image" name="image" accept="image/*" >
            </span>

            <span>
                <label for="stock">Existencias</label>
                <input type="number" id="stock" name="stock" placeholder="Cantidad disponible" value="<?=$datos->existencias?>" required>
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

            if (target.tagName === 'INPUT' || target.tagName === 'SELECT') {
                target.classList.add('valid');
            }
        });
    </script>
    <script>
        var brandSelect = document.getElementById("brand");
        var newBrandContainer = document.getElementById("newBrandContainer");
        var newBrandInput = document.getElementById("newBrand");
        var marcaValor;

        // Configura marcaValor inicialmente
        updateMarcaValor();

        // Evento change para el select brand
        brandSelect.addEventListener('change', function () {
            updateMarcaValor();
            handleBrandChange(); // Llama a handleBrandChange después de actualizar marcaValor
            updateProductName(); // Llama a updateProductName después de actualizar marcaValor
        });

        // Evento input para el input newBrand
        newBrandInput.addEventListener('input', function () {
            updateMarcaValor();
        });

        // Al cargar la página, asegúrate de que la opción seleccionada es la correcta
        window.addEventListener('load', function () {
            updateMarcaValor();
        });

        // Función para actualizar marcaValor
        function updateMarcaValor() {
            marcaValor = brandSelect.value === "otras" ? newBrandInput.value : brandSelect.value;
            // Si la opción "otras" está seleccionada, muestra el contenedor
            newBrandContainer.style.display = brandSelect.value === "otras" ? "flex" : "none";
            // Actualiza la propiedad 'required' del input newBrand
            newBrandInput.required = brandSelect.value === "otras";
        }

        /** Script que reescribe el nombre del producto */
        document.getElementById('type').addEventListener('change', updateProductName);
        document.getElementById('flavor').addEventListener('input', updateProductName);
        document.getElementById('description').addEventListener('input', updateProductName);
        document.getElementById('material').addEventListener('input', updateProductName);
        document.getElementById('capacity').addEventListener('input', updateProductName);
        document.getElementById('units').addEventListener('input', updateProductName);

        function updateProductName() {
            var tipoBebida = document.getElementById('type').value;
            var brandValue = marcaValor;23|E
            var flavorValue = document.getElementById('flavor').value;
            var description = document.getElementById('description').value;
            var material = document.getElementById('material').value;
            var capacidad = document.getElementById('capacity').value + " ml";
            var unidades = document.getElementById('units').value + " unidad(es)";

            var productNameInput = document.getElementById('productName');

            if (tipoBebida) {
                productNameInput.value = tipoBebida + " " + brandValue + " " + flavorValue +
                    " " + description + " " + material + " " + capacidad +
                    " " + unidades + " ";
            } else {
                productNameInput.value = "";
            }
        }
    </script>

</body>
</html>