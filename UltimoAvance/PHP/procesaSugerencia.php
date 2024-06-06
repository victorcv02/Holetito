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
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFile1 | Type != "png") {
            echo "Solo se permiten archivos JPEG o PNG.";
        } else {
            // Mover el archivo al directorio de destino
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "La sugerencia se envió correctamente.";

                // Recoger los valores con $_POST
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
                $sugerencia = $_POST["sugerencia"];
                $evidencia = $targetFile; // Ruta del archivo de evidencia
                // Insertar datos en la base de datos
                $sql = "INSERT INTO sugerencias (nombre, correo, sugerencia, evidencia_path)
                        VALUES ('$nombre', '$correo', '$sugerencia', '$evidencia')";

                if ($conexion->query($sql) === TRUE) {
                    echo "Sugerencia registrada correctamente en la base de datos.";
                } else {
                    echo "Error al registrar la sugerencia en la base de datos: " . $conexion->error;
                }
            } else {
                echo "Hubo un error al cargar la imagen.";
            }
        }
    }
}

// Cerrar la conexión 
?>
