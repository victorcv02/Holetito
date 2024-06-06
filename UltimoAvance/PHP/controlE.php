<php>

    sesion_start();
</php>
<!DOCTYPE html>

<html>
    <head>
        <title>Hotel Paradise</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/home.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/blog.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="logoHotel.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <link href="../CSS/controlE.css" rel="stylesheet" type="text/css"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body class="animsition">
        <!-- Header -->
        <header class="header-v2">
            <!-- Header desktop -->
            <div class="container-menu-desktop trans-03">

                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop p-l-45">

                        <!-- Logo desktop -->		
                        <a href="#" class="logo">
                            <img src="../IMAGES/PRINCIPAL/icon.jpg" alt="IMG-LOGO"/>
                        </a>

                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="Rooms.php">Rooms</a>
                                </li>
                                <li>
                                    <a href="productos.php">Shop</a>
                                </li>
                                <li>
                                    <a href="controlE.php">Seguimiento</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog</a>
                                </li>

                                <li>
                                    <a href="nosotros.php">About</a>
                                </li>

                                <li>
                                    <a href="contacto.php">Contact</a>
                                </li>

                            </ul>
                        </div>	

                        <!-- Icon header -->
                        <div class="logo1">
                            <a href="#" class="logo1">
                                <img src="../IMAGES/PRINCIPAL/icon-buscar.png" alt="IMG-LOGO1"/>

                            </a>
                            <a href="#" class="logo2" id="carrito-icon" data-notify="2">
                                <img src="../IMAGES/PRINCIPAL/icon-carrito.png" alt="IMG-LOGO2"/><span id="cart-count">0</span>

                            </a>
                            <a href="../CONFIG/PHP/login.php" class="logo3" data-notify="0">
                                <img src="../IMAGES/PRINCIPAL/icon-inicio.png" alt="IMG-LOGO3"/>
                            </a>
                            <a href="#" class="logo4" data-notify="0">
                                <img src="../IMAGES/PRINCIPAL/menu-icon.png" alt="IMG-LOGO3"/>
                            </a>

                        </div>

                    </nav>
                </div>	
            </div>
        </header>


        <?php
        include('../CONFIG/PHP/conexion_be.php');

// Aquí debes asignar el nombre de usuario a la variable de sesión
        $_SESSION["usuario"] = "usuario"; 
// Consultar la base de datos para obtener información sobre reclamaciones
        $sqlReclamaciones = "SELECT DNI, Nombre, Correo, Tipo_Bien, Monto_Reclamado, Descripcion, Tipo_Reclamacion, Detalle_Reclamo, Pedido_Solicitud, Evidencia, Estado FROM reclamaciones";
        $resultReclamaciones = mysqli_query($conexion, $sqlReclamaciones);

// Consultar la base de datos para obtener información sobre sugerencias
        $sqlSugerencias = "SELECT Nombre, Correo, Sugerencia, Evidencia_Path, Fecha_Creacion, Estado FROM sugerencias";
        $resultSugerencias = mysqli_query($conexion, $sqlSugerencias);

// Mostrar tabla de reclamaciones
        if ($resultReclamaciones->num_rows > 0) {
            echo "<h2>Tabla de Reclamaciones</h2>";
            echo "<table border='1'>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo_Bien</th>
        <th>Monto_Reclamado</th>
        <th>Descripcion</th>
        <th>Tipo_Reclamacion</th>
        <th>Detalle_Reclamo</th>
        <th>Pedido_Solicitud</th>
        <th>Evidencia</th>
        <th>Estado</th>
    </tr>";

            while ($row = mysqli_fetch_assoc($resultReclamaciones)) {
                echo "<tr>
        <td>{$row['DNI']}</td>
        <td>{$row['Nombre']}</td>
        <td>{$row['Correo']}</td>
        <td>{$row['Tipo_Bien']}</td>
        <td>{$row['Monto_Reclamado']}</td>
        <td>{$row['Descripcion']}</td>
        <td>{$row['Tipo_Reclamacion']}</td>
        <td>{$row['Detalle_Reclamo']}</td>
        <td>{$row['Pedido_Solicitud']}</td>
        <td>{$row['Evidencia']}</td>
        <td>" . (isset($row['Estado']) ? $row['Estado'] : "") . "</td>
    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No se encontraron resultados en la tabla de reclamaciones.</p>";
        }

// Mostrar tabla de sugerencias
        if ($resultSugerencias->num_rows > 0) {
            echo "<h2>Tabla de Sugerencias</h2>";
            echo "<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Sugerencia</th>
        <th>Evidencia_Path</th>
        <th>Fecha_Creacion</th>
        <th>Estado</th>
    </tr>";

            while ($row = mysqli_fetch_assoc($resultSugerencias)) {
                echo "<tr>
        <td>{$row['Nombre']}</td>
        <td>{$row['Correo']}</td>
        <td>{$row['Sugerencia']}</td>
        <td>{$row['Evidencia_Path']}</td>
        <td>{$row['Fecha_Creacion']}</td>
        <td>" . (isset($row['Estado']) ? $row['Estado'] : "") . "</td>
    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No se encontraron resultados en la tabla de sugerencias.</p>";
        }

// Cerrar conexión
        mysqli_close($conexion);
        ?>

        <footer>
            <div class="footer-container">
                <div class="contact-info">
                    <h3>CONTACTANOS:</h3>
                    <p>Correo: <a href="mailto:info@hotelparadise.com">info@hotelparadise.com</a></p>
                    <p>Teléfono: <a href="tel:+5116104000">+51 1 610 4000</a></p>
                    <p>Dirección: Av. Canta Callao, San Martín de Porres 15112</p>
                </div>
                <div class="social-media">
                    <h3>REDES SOCIALES:</h3>
                    <a href="https://www.facebook.com/HotelParadise2016/?locale=es_LA">
                        <i class="fab fa-facebook"></i> Facebook
                    </a>
                    <a href="https://www.instagram.com/hotelparadise.peru/?hl=es">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                    <h3>UBICANOS:</h3>
                    <a href="https://maps.app.goo.gl/mM8aNPLB1n8vP8R8A">
                        <i class="fas fa-map-marker-alt"></i> Google Maps
                    </a>
                </div>
                <div class="buttons">
                    <h3>OTRAS OPCIONES:</h3>
                    <a href="formularioSugerencia.php">
                        <button class="suggestions">Formulario de Sugerencias</button>
                    </a>
                    <a href="libroReclamaciones.php">
                        <button class="complaints">Libro de Reclamaciones</button>
                    </a>
                    <a href="preguntasFrecuentes.php">
                        <button class="faq">Preguntas Frecuentes</button>
                    </a>

                </div>
            </div>
        </footer>
    </body>
</html>