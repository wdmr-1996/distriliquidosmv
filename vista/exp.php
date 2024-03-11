<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pregunta de selección múltiple</title>
</head>
<body>
  <h1>Test de selección múltiple</h1>
  <form id="myForm">
    <p>¿Cuál es la capital de Francia?</p>
    <input type="radio" id="paris" name="capital" value="paris">
    <label for="paris">París</label><br>
    <input type="radio" id="london" name="capital" value="london">
    <label for="london">Londres</label><br>
    <input type="radio" id="berlin" name="capital" value="berlin">
    <label for="berlin">Berlín</label><br>
    <input type="radio" id="madrid" name="capital" value="madrid">
    <label for="madrid">Madrid</label><br><br>
    <input type="submit" value="Enviar">
  </form>
  
  <script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita que el formulario se envíe

      // Obtenemos el valor seleccionado
      var selectedValue = document.querySelector('input[name="capital"]:checked').value;

      // Comparamos el valor seleccionado con la respuesta correcta
      if (selectedValue === 'london') {
        // Si es la respuesta correcta, imprimimos en el documento
        document.body.innerHTML += "<p>¡Respuesta correcta!</p>";
      } else {
        // Si no es la respuesta correcta, también podemos imprimir un mensaje
        document.body.innerHTML += "<p>Respuesta incorrecta. Intenta nuevamente.</p>";
      }
    });
  </script>
</body>
</html>
