<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sugerencias</title>
    <link href="../css/FormularioS.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="../img/icon.jpg" type="image/png">
    <link rel="shortcut icon" href="../img/icon.jpg" type="image/png">
    <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <?php include 'cabecera.php'; ?>
        <div class="tituloform">Formulario de Sugerencias</div>
    </header>
    <div class="container-formulario">
        
        <p class="descripcion">¡Nos encantaría conocer tus sugerencias! Por favor, comparte tus ideas con nosotros.</p>

        <form action="procesar_sugerencia.php" method="post" class="formulario-sugerencias" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="input-sugerencia" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="input-sugerencia" required><br>

            <label for="sugerencia">Sugerencia:</label><br>
            <textarea id="sugerencia" name="sugerencia" class="textarea-sugerencia" rows="4" cols="50" required></textarea><br>

            <div id="imagenes-container">
                <label for="imagen">Subir imagen (máximo 2MB):</label>
                <input type="file" name="imagen[]" accept=".jpg, .jpeg, .png" class="input-sugerencia" required><br>
            </div>

            <button type="button" id="agregar-imagen">Agregar Imagen</button>
            <button type="button" id="eliminar-imagen">Eliminar Última Imagen</button>

            <input type="submit" value="Enviar Sugerencia" class="boton-enviar">
        </form>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script>
   document.addEventListener("DOMContentLoaded", function() {
    const agregarBoton = document.getElementById("agregar-imagen");
    const eliminarBoton = document.getElementById("eliminar-imagen");
    const imagenesContainer = document.getElementById("imagenes-container");

    agregarBoton.addEventListener("click", function() {
        const nuevaInput = document.createElement("input");
        nuevaInput.type = "file";
        nuevaInput.name = "imagen[]";
        nuevaInput.accept = ".jpg, .jpeg, .png";
        nuevaInput.className = "input-sugerencia";
        nuevaInput.required = true;
        imagenesContainer.appendChild(nuevaInput);
    });

    eliminarBoton.addEventListener("click", function() {
        const inputs = imagenesContainer.querySelectorAll("input");
        if (inputs.length > 1) {
            const ultimaInput = inputs[inputs.length - 1];
            imagenesContainer.removeChild(ultimaInput);
        }
    });

    const inputs = document.querySelectorAll('input[type="file"]');
    inputs.forEach(function(input) {
        input.addEventListener("change", function() {
            if (input.files.length > 0) {
                const file = input.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB
                if (file.size > maxSize) {
                    alert("El archivo es demasiado grande. El tamaño máximo permitido es 2MB.");
                    input.value = ""; // Limpiar el campo de entrada
                }
            }
        });
    });
});


    </script>
    </body>

</html>