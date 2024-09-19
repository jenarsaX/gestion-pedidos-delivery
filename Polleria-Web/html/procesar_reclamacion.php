<?php

require 'conectaBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta a la base de datos utilizando la función getConexion que proporcionaste.
    $conexion = getConexion();

    // Verifica si la conexión se realizó con éxito.
    if ($conexion) {
        // Recopila los datos del formulario.
        $documento = $_POST["documento"];
        $numero_documento = $_POST["numero_documento"];
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $departamento = $_POST["departamento"];
        $direccion = $_POST["direccion"];
        $correo_electronico = $_POST["correo_electronico"];
        $celular = $_POST["celular"];
        $tipo_bien = $_POST["tipo_bien"];
        $tienda_compra = $_POST["tienda_compra"];
        $numero_pedido = $_POST["numero_pedido"];
        $monto_reclamado = $_POST["monto_reclamado"];
        $tipo_reclamo = $_POST["tipo_reclamo"];
        $descripcion_reclamo = $_POST["descripcion_reclamo"];
        $pedido_consumidor = $_POST["pedido_consumidor"];

        // Inserta los datos en la base de datos (deberías usar sentencias preparadas para mayor seguridad).
        $sql = "INSERT INTO reclamaciones (documento, numero_documento, nombre, apellido_paterno, apellido_materno, departamento, direccion, correo_electronico, celular, tipo_bien, tienda_compra, numero_pedido, monto_reclamado, tipo_reclamo, descripcion_reclamo, pedido_consumidor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $sql);

        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $documento, $numero_documento, $nombre, $apellido_paterno, $apellido_materno, $departamento, $direccion, $correo_electronico, $celular, $tipo_bien, $tienda_compra, $numero_pedido, $monto_reclamado, $tipo_reclamo, $descripcion_reclamo, $pedido_consumidor);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Reclamación enviada con éxito.";
        } else {
            echo "Error al enviar la reclamación.";
        }

        // Cierra la conexión.
        mysqli_close($conexion);
    }
}
?>
