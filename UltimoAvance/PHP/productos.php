<?php
session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Tienda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/home.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="logoHotel.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <script src="https://kit.fontawesome.com/15feb8d600.js" crossorigin="anonymous"></script>
        <link href="../CSS/productos.css" rel="stylesheet" type="text/css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.js" integrity="sha512-3PL7jW3xI1EjF2Hfqwv5u6nKG/BnUbWytnJDhsY/q5CbIB5XzoHNhJvgmFeVD7xgC9DbKDm+gPP9uDAAfLAZUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <br><br>

        <!-- Productos -->
        <div class="row">
            <?php
            include('../CONFIG/PHP/conexion_be.php');

            $query = "SELECT DISTINCT Categoria FROM tblproductos"; // Obtener categorías únicas
            $result = mysqli_query($conexion, $query);

            if (!$result) {
                die("Error al obtener las categorías: " . mysqli_error($conexion));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $categoria = $row['Categoria'];
                echo '<h2>' . $categoria . '</h2>'; // Muestra el título de categoría
                // Consulta para obtener productos de la categoría actual
                $queryProductos = "SELECT * FROM tblproductos WHERE Categoria = '$categoria'";
                $resultProductos = mysqli_query($conexion, $queryProductos);

                if (!$resultProductos) {
                    die("Error al obtener los productos de la categoría " . $categoria . ": " . mysqli_error($conexion));
                }

                echo '<div class="product-container">'; // Contenedor para los productos
                while ($producto = mysqli_fetch_assoc($resultProductos)) {
                    echo '
                        <div class="col-3">
                            <div class="card">
                                <div class="product-image">
                                    <img title="' . $producto['Nombre'] . '" src="../IMAGES/PRODUCTOS/' . $producto['Imagen'] . '" alt="' . $producto['Nombre'] . '">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">' . $producto['Nombre'] . '</h5>
                                    <p class="card-text">' . $producto['Descripcion'] . '</p>
                                    <p class="card-price">S/' . $producto['Precio'] . '</p>';

                    if (isset($_SESSION["usuario"])) {
                        echo '<button class = "btn btn-primary" name = "btnAccion" data-nombre = "' . $producto['Nombre'] . '" data-precio = "' . $producto['Precio'] . '" data-id = "' . $producto['ID'] . '" type = "button">Agregar al carrito</button>';
                    } else {
                        echo '<button class = "btn btn-primary" name = "btnIniciarSesion" data-nombre = "' . $producto['Nombre'] . '" data-precio = "' . $producto['Precio'] . '" data-id = "' . $producto['ID'] . '" type = "button">Agregar al carrito</button>';
                    }

                    echo ' </div> ';
                    echo ' </div> ';

                    echo '</div>'; // Cierre del contenedor de habitaciones
                   
                }
                echo '</div>'; // Cierre del contenedor de productos
            }
            ?>
        </div>

        <!-- mostrar el carrito -->

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
                        <i class = "fab fa-facebook"></i> Facebook
                    </a>
                    <a href = "https://www.instagram.com/hotelparadise.peru/?hl=es">
                        <i class = "fab fa-instagram"></i> Instagram
                    </a>
                    <h3>UBICANOS:</h3>
                    <a href = "https://maps.app.goo.gl/mM8aNPLB1n8vP8R8A">
                        <i class = "fas fa-map-marker-alt"></i> Google Maps
                    </a>
                </div>
                <div class = "buttons">
                    <h3>OTRAS OPCIONES:</h3>
                    <a href = "formularioSugerencia.php">
                        <button class = "suggestions">Formulario de Sugerencias</button>
                    </a>
                    <a href = "libroReclamaciones.php">
                        <button class = "complaints">Libro de Reclamaciones</button>
                    </a>
                    <a href = "preguntasFrecuentes.php">
                        <button class = "faq">Preguntas Frecuentes</button>
                    </a>

                </div>
            </div>
        </footer>
        <script src="../JS/productos.js" type="text/javascript"></script>
    </body>
</html>                             