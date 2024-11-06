<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Empresa Electrónica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="navbar.js" defer></script>
    <script src="footer.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Asegurarse de que todas las imágenes tengan el mismo tamaño */
        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            /* Para que las imágenes mantengan la proporción y se recorten si es necesario */
        }
    </style>
    <script>
        // Pasar el nombre de usuario de la sesión a JavaScript
        const username = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>";
    </script>
</head>

<body>
    <!-- Barra de navegación -->
    <div id="navbar"></div>

    <!-- Contenedor principal -->
    <div class="container-flex container mt-5">
        <h2 class="mb-4">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/fabricacion.jpg" alt="Fabricación de Componentes" class="service-image mb-3">
                <h3>Fabricación de Componentes</h3>
                <p>Ofrecemos fabricación de componentes electrónicos de alta calidad, personalizados según las
                    necesidades de nuestros clientes.</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/consultoria.jpg" alt="Consultoría Técnica" class="service-image mb-3">
                <h3>Consultoría Técnica</h3>
                <p>Proporcionamos servicios de consultoría técnica para ayudar a nuestros clientes a encontrar las
                    mejores soluciones electrónicas.</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/soporte.jpg" alt="Soporte Técnico" class="service-image mb-3">
                <h3>Soporte Técnico</h3>
                <p>Ofrecemos soporte técnico integral para garantizar el correcto funcionamiento de nuestros productos y
                    servicios.</p>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>

    <!-- Archivos JavaScript necesarios -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>