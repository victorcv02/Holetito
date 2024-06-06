<?php

session_start();
include 'conexion_be.php';

// Obtener los valores de correo y contraseña del formulario POST
$correo = $_POST['correo'];
$password = $_POST['password'];

// Consulta para validar el inicio de sesión en la base de datos
$validar_login = mysqli_query($conexion, "SELECT nombre_completo FROM usuarios WHERE correo='$correo'
    and password='$password'");

// Verifica si se encontró al menos un registro en la consulta
if (mysqli_num_rows($validar_login) > 0) {
    $row = mysqli_fetch_assoc($validar_login);
    $_SESSION["usuario"] = $row["nombre_completo"];
    header("location: ../../PHP/index.php"); // Si se encontró un registro válido, redirigir al usuario a la página principal
    exit;
} else {
    echo '  
            <script>
                    alert("Usuario no existe, por favor verifique los datos introducidos");
                    window.location="login.php";
            </script>
        ';
    exit;
}
?>