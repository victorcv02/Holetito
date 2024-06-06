<?php

include_once '../CONFIG/PHP/conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "../IMAGES/"; // Directorio de destino
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Nombre del archivo cargado
    // Verificar tamaño del archivo
    if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "El archivo es demasiado grande. Máximo 2MB permitido.";
    } else {
        // Verificar el tipo de archivo (JPEG o PNG)
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo "Solo se permiten archivos JPEG o PNG.";
        } else {
            // Mover el archivo al directorio de destino
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "El reclamo se envió correctamente.";

                // Recoger los valores con $_POST
                $dni = $_POST["tctNroDoc"];
                $nombre = $_POST["txtNombre"];
                $telefono = $_POST["txtTelefono"];
                $direccion = $_POST["txtDireccion"];
                $acompanantes = $_POST["cboAcompanantes"];
                $correo = $_POST["txtCorreo"];
                $tipoBien = $_POST["cboTipoBien"];
                $montoReclamado = $_POST["txtMontoReclamado"];
                $descripcion = $_POST["txtDescripcion"];
                $tipoReclamacion = $_POST["cboTipoReclamacion"];
                $detalleReclamo = $_POST["txtDetalleReclamo"];
                $pedidoSolicitud = $_POST["txtPedidoSolicitud"];
               
                $evidencia = $targetFile; // Ruta del archivo de evidencia
                // Insertar datos en la base de datos
                $sql = "INSERT INTO reclamaciones (dni, nombre, telefono, direccion, acompanantes, correo, tipo_bien, monto_reclamado, descripcion, tipo_reclamacion, detalle_reclamo, pedido_solicitud, evidencia)
                        VALUES ('$dni', '$nombre', '$telefono', '$direccion', $acompanantes, '$correo', '$tipoBien', $montoReclamado, '$descripcion', '$tipoReclamacion', '$detalleReclamo', '$pedidoSolicitud', '$evidencia')";

                if ($conexion->query($sql) === TRUE) {
                    echo "Reclamación registrada correctamente en la base de datos.";

                   
                } else {
                    echo "Error al registrar la reclamación en la base de datos: " . $conexion->error;
                }
            } else {
                echo "Hubo un error al cargar la imagen.";
            }
        }
    }
}

// Cerrar la conexión (puede no ser necesario dependiendo de la configuración de tu servidor)
$conexion->close();
?>