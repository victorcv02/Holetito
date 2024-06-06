
<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sugerencia = $_POST['sugerencia'];
    $imagen = $_POST['imagen'];

    $query = "INSERT INTO reclamaciones(nombre, correo, sugerencia, imagen) VALUES ('$nombre', '$correo', '$sugerencia', '$imagen')";

    if (mysqli_query($conexion, $query)) {
        echo "Los datos se han insertado correctamente en la tabla 'reclamaciones'.";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>