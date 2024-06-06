<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de Sugerencias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/home.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="logoHotel.ico">
        <link href="../CSS/formularioSugerencia.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>

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

        <!--FORMULARIO-->

        <form method="POST" action="procesaSugerencia.php" enctype="multipart/form-data">
            <h1><strong>Formulario de Sugerencias - Hotel Paradise</strong></h1>
            <p>Por favor, déjanos tus sugerencias para mejorar nuestros servicios. Tu opinión es importante para nosotros.</p>



            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" ><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" ><br>

            <label for="sugerencia">Sugerencia:</label>
            <textarea id="sugerencia" name="sugerencia" rows="8" ></textarea><br>


            <div class="control-form">
                <label for="foto">Adjunte foto del usuario:</label>
                <br>
                <input type="file" name="fileToUpload" accept=".jpg, .jpeg, .png" required>
            </div>

            <br><br>

            <input type="submit" value="Enviar" name="btnEnviar" />
        </form>
        <br><br><br><br>
        <!-- Footer -->
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