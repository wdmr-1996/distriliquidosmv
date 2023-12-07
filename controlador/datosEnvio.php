<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_envio";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre_apellido = $_POST['nombre_apellido'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$barrio = $_POST['barriosSelect'];
$tipo_de_calle = $_POST['tipo_de_calle'];
$avenida = $_POST['avenida'];
$referencia = $_POST['referencia'];

// Verificar si los valores de bloq1 y bloq2 están definidos en $_POST
$bloq1 = isset($_POST['bloq1']) ? $_POST['bloq1'] : null;
$bloq2 = isset($_POST['bloq2']) ? $_POST['bloq2'] : null;

// Preparar la consulta SQL para insertar datos en la tabla
$sql = "INSERT INTO direcciones (Nombre, Celular, Correo, Barrio, Tipo, Tipo_nombre, Numero1, Numero2, Referencias) 
        VALUES ('$nombre_apellido', '$celular', '$correo', '$barrio', '$tipo_de_calle', '$avenida', '$bloq1', '$bloq2', '$referencia')";

if ($conn->query($sql) === TRUE) {
    $response = "Datos guardados exitosamente.";
} else {
    $response = "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();

// Enviar la respuesta como una alerta en JavaScript
echo "<script>alert('$response');</script>";

// Redireccionar de vuelta al formulario
echo "<script>window.location.href = '../vista/formEnvio.php';</script>";
