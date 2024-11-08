<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de - Empresa Electrónica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="navbar.js" defer></script>
    <script src="footer.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Pasar el nombre de usuario de la sesión a JavaScript
        const username = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>";
    </script>
</head>

<body>
    <!-- Barra de navegación -->
    <div id="navbar"></div>

    <!-- Contenedor principal -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Acerca de Nosotros</h2>
                <p>
                    Somos una empresa dedicada a la fabricación de componentes electrónicos en Córdoba. <br>Nuestra
                    misión
                    es
                    proporcionar productos de alta calidad y soluciones innovadoras a nuestros clientes.<br>
                    Contamos con un equipo de profesionales altamente capacitados y comprometidos con la excelencia en
                    cada uno de los procesos de producción.
                    Nuestra visión es ser líderes en el mercado de componentes electrónicos a nivel nacional e
                    internacional.
                </p>
            </div>
        </div>

        <div class="contacto-wrapper">
            <div class="row mt-5">
                <div class="col-md-6 informacion-contacto">
                    <h2>Información de Contacto</h2>
                    <p>Dirección: Calle Principal #123</p>
                    <p>Teléfono: 123-456-7890</p>
                </div>
                <div class="col-md-6">
                    <h2>Nuestra Ubicación</h2>
                    <p>Nuestra oficina está ubicada en el corazón de la ciudad.</p>
                    <div class="mapa-contenido">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13619.272780148576!2d-64.19043507244876!3d-31.41913475885105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1715439437425!5m2!1ses-419!2sar"
                            width="500" height="250" style="border: 1px solid silver" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pie de página -->
    <div id="footer"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>