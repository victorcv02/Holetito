<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cuartos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/home.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="logoHotel.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <script src="../JS/productos.js" type="text/javascript"></script>
        <link href="../CSS/nosotros.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/rooms.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/productos.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/15feb8d600.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.js" integrity="sha512-3PL7jW3xI1EjF2Hfqwv5u6nKG/BnUbWytnJDhsY/q5CbIB5XzoHNhJvgmFeVD7xgC9DbKDm+gPP9uDAAfLAZUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            #btnGenerarCertificados {
                display: block;
                margin: 0 auto;
                background-color: #ccccff;
                margin-top: 20px; /* Ajusta según sea necesario */
            }
        </style>
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
        <div class="rowro">
            <?php
            include('../CONFIG/PHP/conexion_be.php');

            $query = "SELECT * FROM habitaciones"; // Obtener todas las habitaciones
            $result = mysqli_query($conexion, $query);

            if (!$result) {
                die("Error al obtener las habitaciones: " . mysqli_error($conexion));
            }

            while ($habitacion = mysqli_fetch_assoc($result)) {
                $id = $habitacion['ID'];
                $nombre = $habitacion['Nombre'];
                $precio = $habitacion['Precio'];
                $descripcion = $habitacion['Descripcion'];
                $imagen = $habitacion['Imagen'];

                echo '<div class="room-container">';
                echo '
        <div class="room">
            <div class="habitaciones">
            <h1>' . $nombre . '</h1>
                <img src="../IMAGES/PRINCIPAL/' . $imagen . '" alt="' . $nombre . '">
            
            <p>Descripción: ' . $descripcion . '</p>
            <p>Precio: S/' . $precio . '</p>';

                if (isset($_SESSION["usuario"])) {
                    echo '<button class="btn btn-primary" name="btnAccion" data-nombre="' . $nombre . '" data-precio="' . $precio . '" data-id="' . $id . '" type="button">Reservar</button>';
                } else {
                    echo '<button class="btn btn-primary" name="btnIniciarSesion" data-nombre="' . $nombre . '" data-precio="' . $precio . '" data-id="' . $id . '" type="button">Reservar</button>';
                }

                echo ' </div> ';
                echo ' </div> ';

                echo '</div>'; // Cierre del contenedor de habitaciones
            }
            ?>
        </div>
        <button id="btnGenerarCertificados">Generar Certificados</button>
        <div id="carrito" style="display: none;">

            <ul id="lista-productos">

            </ul>
            <p><center>Total: S/.<span id="cart-total">0</span></center>
            <button id="vaciar-carrito">Vaciar Carrito</button> <!-- Botón para vaciar el carrito -->
            <button id="ver-carrito" onclick="mostrarSweetAlert()">Procesar</button>
            <script>
                function mostrarSweetAlert() {
                    Swal.fire({
                        title: '¿Deseas guardar los cambios?',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Guardar',
                        denyButtonText: `No guardar`,
                    }).then((result) => {
                        /* Lee más acerca de isConfirmed, isDenied a continuación */
                        if (result.isConfirmed) {
                            Swal.fire('¡Compra realizada!', '', 'success').then(() => {
                                // Redirige a otra ventana o página después de guardar
                                window.location.href = 'index.php'; // Cambia 'nuevaPagina.html' por la URL que desees
                            });
                        } else if (result.isDenied) {
                            Swal.fire('La compra no se realizo!!', '', 'info');
                        }
                    });
                }
            </script>
        </div>
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

        <script>
            document.getElementById('btnGenerarCertificados').addEventListener('click', function () {
                // Realiza una petición al archivo PHP para generar los certificados
                fetch('generar_certificado.php')
                        .then(response => response.json())
                        .then(data => {
                            if (data.certificados.length > 0) {

                                const certificadosQueryString = encodeURIComponent(JSON.stringify(data.certificados));

                                window.location.href = `certificados.php?certificados=${certificadosQueryString}`;
                            } else {

                                alert("No hay certificados generados.");
                            }
                        })
            });


        </script>
    </body>
</html>