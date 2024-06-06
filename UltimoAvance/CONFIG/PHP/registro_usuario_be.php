<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,password)
                                VALUES('$nombre_completo','$correo','$usuario','$password')";

    /* ------VERIFICAR QUE EL CORREO NO SE REPITA----- */

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                    alert("Este correo ya está registrado, intenta con otro diferente");
                    window.location="login.php";
            </script>
        ';
        exit();
    } 
    
     /* ------VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA----- */

    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                    alert("Este usuario ya está registrado, intenta con otro diferente");
                    window.location="login.php";
            </script>
        ';
        exit();
    } 
    /* ----------------------------------------------- */

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo'
                    <script>
                        alert("Usuario almacenado exitosamente");
                        window.location="login.php";
                    </script>
            ';
    } else {
        echo'
                    <script>
                        alert("Intentalo de nuevo, usuario no almacenado");
                        window.location="login.php";
                    </script>
            ';
    }
    mysqli_close($conexion);
?>

