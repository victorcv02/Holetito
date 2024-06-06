<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="../CSS/login.css" rel="stylesheet" type="text/css"/>
       <a href="logoHotel.ico"></a>

    </head>
    <body>

        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">

                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la Página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>

                </div>
                <!-- formulario de login y registro -->
                <div class="contenedor__login-register">
                    <!-- login -->
                    <form action="login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Entrar</button>
                    </form>
                    
                    <!-- registrar -->
                    <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Registrarse</button>
                    </form>
                </div> 
            </div> 
        </main>
        <script src="../JS/login.js" type="text/javascript"></script>
    </body>
</html>
