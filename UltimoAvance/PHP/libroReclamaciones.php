<!DOCTYPE html>
<html>
    <head>
        <title>Libro de Reclamaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/home.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="logoHotel.ico">
        <link href="../CSS/libroReclamaciones.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <script src="https://kit.fontawesome.com/15feb8d600.js" crossorigin="anonymous"></script>
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
        
        <!-- Formulario-->
        
        <form method="POST" action="procesaReclamaciones.php" enctype="multipart/form-data">
            <h1><center><legend>LIBRO DE RECLAMACIONES</legend></center></h1>
            <p>Este es nuestro libro de reclamaciones. En caso de que quieras realizar alguna 
                queja o reclamación con respecto a nuestro servicio y productos brindados, 
                realízalo aquí.</p>

            <fieldset>
                <legend>Identificación del cliente reclamante</legend>
                <label>DNI</label>
                <input type="text" name="tctNroDoc"
                       placeholder="Ingrese número de documento"
                       required pattern="[0-9]+" maxlength="8"/>
                <label>Nombre</label>
                <input type="text" name="txtNombre"
                       placeholder="Ingrese Nombre"
                       required pattern="[a-z A-Z]+"/>
                <label>Telefono</label>
                <input type="text" name="txtTelefono"
                       placeholder="Ingrese Nro. Telefonico"
                       required pattern="[0-9]+" maxlength="9"/>
                <label>Dirección o domicilio</label>
                <input type="text" name="txtDireccion"
                       placeholder="Ingrese Dirección"
                       required>
                <label>Nro de acompañantes</label>
                <select name="cboAcompanantes">
                    <option value="1" selected>Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres o mayor</option>
                </select>
                <label>Correo Electrónico</label>
                <input type="text" name="txtCorreo"
                       placeholder="Ingrese su Correo"
                       required>
            </fieldset>

            <br><br>

            <fieldset>
                <legend>Identificación del bien contratado</legend>
                <label>Tipo de bien a reclamar</label>
                <select name="cboTipoBien">
                    <option value="P" selected>Seleccionar tipo de bien</option>
                    <option value="P">Producto</option>
                    <option value="S">Servicio</option>
                    <option value="A">Ambos</option>
                </select>
                <label>Monto reclamado en soles</label>
                <input type="text" name="txtMontoReclamado"
                       placeholder="Ingrese el monto reclamado"
                       required>
                <label>Descripción</label>
                <textarea name="txtDescripcion"
                          rows="5"
                          cols="50"></textarea>
            </fieldset>

            <br><br>

            <fieldset>
                <legend>Detalle del reclamo y solicitud del cliente</legend>
                <label>Tipo de reclamación</label>
                <select name="cboTipoReclamacion">
                    <option value="R" selected>Reclamo</option>
                    <option value="Q">Queja</option>
                    <option value="A">Ambos</option>
                </select>
                <label>Detalle sobre el reclamo o queja</label>
                <textarea name="txtDetalleReclamo"
                          rows="5"
                          cols="50"></textarea>
                <label>Pedido o solicitud del reclamante</label>
                <textarea name="txtPedidoSolicitud"
                          rows="5"
                          cols="50"></textarea>
            </fieldset>

            <fieldset>
                <legend>Adjuntar imagen de evidencia</legend>
                <input type="file" name="fileToUpload" accept=".jpg, .jpeg, .png" required>
            </fieldset>

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