<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Libro de reclamciones - El Ruedo</title>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link href="../css/DiseñoLibroR.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">

        <title>Libro de Reclamaciones</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
            }

            .formulario {
                width: 80%;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

            }

            h1 {
                text-align: center;
                color: #D5352D;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
            }

            p.concepto {
                font-weight: bold;
                font-size: 15px;
                text-align: center;

            }

            label {
                font-weight: bold;
            }

            select, input, textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .grupo {
                border: 1px solid #ccc;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 5px;
                background-color: #fff;
            }

            .descripcion {
                resize: vertical;
            }
            .centrar-botones {
                text-align: center
            }

            button {
                background-color: red;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: cadetblue;
            }
        </style>
    </head>

    <body>
        <header>
            <?php include 'cabecera.php'; ?>
        </header>
<div class="titulolibro">Libro de Reclamaciones</div>
        <div class="formulario">
            
            <form method="post" action="procesar_reclamacion.php">
                <p
                    <div class="concepto">Conforme a lo establecido en el Código de Protección y Defensa del Consumidor, 
                    esta institución cuenta con un Libro de Reclamaciones a su disposició.
                <p
                    <div class="concepto">Fecha:20 de Septiembre del 2023
                </p>
                <form>
                    <div class="grupo">
                        <h2>Identificación del consumidor reclamante</h2>
                        <label for="documento">Documento de Identidad</label>
                        <select id="documento" name="documento">
                            <option value="DNI">DNI</option>
                            <option value="Carnet de Extranjería">Carnet de Extranjería</option>
                        </select>

                        <label for="numero_documento">Número de Documento</label>
                        <input type="text" id="numero_documento" name="numero_documento" required>

                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" id="apellido_paterno" name="apellido_paterno" required>

                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" id="apellido_materno" name="apellido_materno" required>

                        <label for="departamento">Departamento</label>
                        <select id="departamento" name="departamento">
                            <option value="Lima">Lima</option>
                            <label for="documento">Documento de Identidad</label>
                            <select id="documento" name="documento">
                            </select>
                            <label for="provincia">Provincia</label>
                            <select id="provincia" name="provincia">
                                <option value="Lima">Lima</option>
                            </select>
                            <label for="distrito">Distrito</label>
                            <select id="distrito" name="distrito">
                                <option value="Lima">Comas</option>
                                <option value="Lima">Carabayllo</option>
                            </select
                        </select>

                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" required>

                        <label for="correo_electronico">Correo Electrónico</label>
                        <input type="email" id="correo_electronico" name="correo_electronico" required>

                        <label for="celular">Celular</label>
                        <input type="tel" id="celular" name="celular" required>
                        </select>

                    </div>

                    <div class="grupo">
                        <h2>Identificación del bien contratado</h2>
                        <label for="tipo_bien">Tipo de Bien Contratado</label>
                        <select id="tipo_bien" name="tipo_bien">
                            <option value="Producto">*Seleccione*</option>
                            <option value="Producto">Producto</option>
                            <option value="Servicio">Servicio</option>
                        </select>

                        <label for="tienda_compra">Tienda donde realizó la compra</label>
                        <select id="tienda_compra" name="tienda_compra">
                            <option value="Tienda A">*Seleccione*</option>
                            <option value="Tienda A">El Ruedo Retablo</option>
                            <option value="Tienda B">El Ruedo Lucyana</option>
                            <option value="Tienda C">El Ruedo San Antonio</option>
                            <!-- Agrega más opciones de tiendas aquí -->
                        </select>

                        <label for="numero_pedido">Número de Pedido</label>
                        <input type="text" id="numero_pedido" name="numero_pedido" required>

                        <label for="monto_reclamado">Monto Reclamado</label>
                        <input type="text" id="monto_reclamado" name="monto_reclamado" required>
                    </div>

                    <div class="grupo">
                        <h2>Detalle de la reclamación</h2>
                        <label for="tipo_reclamo">Tipo de Reclamo</label>
                        <select id="tipo_reclamo" name="tipo_reclamo">
                            <option value="Reclamo">*Seleccione*</option>
                            <option value="Reclamo">Reclamo</option>
                            <option value="Queja">Queja</option>
                        </select>

                        <label for="descripcion_reclamo">Descripción</label>
                        <textarea id="descripcion_reclamo" name="descripcion_reclamo" class="descripcion" required></textarea>

                        <label for="pedido_consumidor">Pedido del Consumidor</label>
                        <input type="text" id="pedido_consumidor" name="pedido_consumidor" required>
                    </div>
                    
                    <div class="control-form">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" accept=".jpg, .png"
                               onchange="mostrarImagenSeleccionada(this)"/>
                        <img id="imagenMostrada" src="" alt="Imagen mostrada"
                             style="max-width: 100%; max-height: 300px"/>
                    </div>

                    <input type="hidden" name="accion" value="add"/>
                    <div class="centrar-botones">
                        <button type="submit">Enviar Reclamación</button>
                    </div>
                </form>

        </div>
        <script>
            function mostrarImagenSeleccionada(input) {
                const imagenMostrada = document.getElementById('imagenMostrada');

                if (input.files && input.files[0]) {
                    const archivoSeleccionado = input.files[0];
                    console.log(archivoSeleccionado.type);
                    if (archivoSeleccionado.type === 'image/jpeg'
                            || archivoSeleccionado.type === 'image/png') {
                        const lector = new FileReader();

                        lector.onload = function (e) {
                            imagenMostrada.src = e.target.result;
                        };

                        lector.readAsDataURL(archivoSeleccionado);
                    } else {
                        alert('Por favor, seleccione un archivo JPG o PNG válido.');
                        input.value = '';
                        imagenMostrada.src = '';
                    }
                } else {
                    imagenMostrada.src = '';
                }
            }
        </script>
    </form>
</div>
</div>
</div>
</div>

<footer>
    <?php include 'footer.php'; ?>
</footer>
</body>

</html>
