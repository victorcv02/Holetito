
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

        <!-- Slider -->
        <div class="slider-container">
            <div class="slider position">
                <div class="slider-overlay"></div>
                <div class="slider-content">
                    <h1>Bienvenido al Hotel Paradise</h1>
                    <p>Su escapada perfecta</p>
                    <a href="#hab" class="btn">Explore</a>
                </div>
            </div>
        </div>

        <section>
            <!-- INTRO-CATALOGO -->
            <div class="intro" id="hab">
                <h1>Nuestras Habitaciones</h1>
                <p>Explora nuestra selección de habitaciones y suites para una experiencia de lujo en el Hotel Paradise.</p>
            </div>

            <!-- CATALOGO -->
            <div class="catalog-container">
                <div class="catalog-card">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/XsQ7PInKiCE?si=e2SkNCcETBIaoJH9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="card-content">
                        <h2>Estandar</h2>
                        <p>Una habitación cómoda para una estancia relajante.</p>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="video-container">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=316&href=https%3A%2F%2Fwww.facebook.com%2FHotelParadise2016%2Fvideos%2F625523025437310%2F&show_text=false&width=560&t=0" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="card-content">
                        <h2>Suite Junior</h2>
                        <p>Una habitación espaciosa con disponibilidad de dos camas.</p>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="video-container">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=316&href=https%3A%2F%2Fwww.facebook.com%2FHotelParadise2016%2Fvideos%2F1702847646750228%2F&show_text=false&width=560&t=0" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="card-content">
                        <h2>Suite Deluxe</h2>
                        <p>Una suite de lujo que incluye bañeras modernas y una pequeña sala con todas las comodidades que necesita.</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Blog Section -->
        <!-- INTRO-blog -->
        <div class="intro2" id="blog">
            <h1>BLOG</h1>
            <p>Bienvenido a la sección de noticias de Paradise Hotel. Aquí encontrarás las últimas 
                novedades sobre nuestro hotel.</p>
        </div>

        <section class="blog-section">

            <article class="blog-post">
                <img src="../IMAGES/PRINCIPAL/aniversary.jpeg" alt="Blog Post 1">
                <h2>Paradise Hotel celebra su 15 aniversario</h2>
                <p>
                    ¡Estamos emocionados de compartir que Hotel Paradise está celebrando 15 años
                    de hospitalidad excepcional! Únete a nosotros para conmemorar este hito especial 
                    con sorpresas, descuentos exclusivos y eventos emocionantes durante todo el año.
                </p>

            </article>

            <article class="blog-post">
                <img src="../IMAGES/PRINCIPAL/summer.jpeg" alt="Blog Post 2">
                <h2>Oferta de Temporada de Verano</h2>
                <p>
                    ¿Listo para un verano inolvidable? Descubre nuestras ofertas especiales de temporada 
                    de verano en Hotel Paradise. Disfruta de tarifas con descuento, actividades bajo el sol 
                    y acceso exclusivo a nuestra carta de menu. ¡Reserva ahora y sumérgete en la diversión
                    del verano!
                </p>

            </article>
            <article class="blog-post">
                <img src="../IMAGES/PRINCIPAL/escapada.jpg" alt="Blog Post 3">
                <h2>Escapada romantica</h2>
                <p>
                    ¿Estás planeando una escapada romántica para celebrar tu aniversario? En Hotel Paradise, hemos 
                    preparado una selección especial de las tres reservas más destacadas para ayudarte a crear recuerdos 
                    inolvidables en tu ocasión especial. Desde cenas íntimas hasta relajantes días de spa, aquí están nuestras 
                    principales recomendaciones:
                </p>

            </article>
        </section>
        <br><br>
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
        <script src="../JS/blog.js" type="text/javascript"></script>
    </body>
</html>