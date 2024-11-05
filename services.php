<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Empresa Electrónica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php" id="logo">Electro Cordoba</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components.php">Componentes</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container-flex container mt-5">
        <h2 class="mb-4">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Fabricación de Componentes</h3>
                <p>Ofrecemos fabricación de componentes electrónicos de alta calidad, personalizados según las
                    necesidades de nuestros clientes.</p>
            </div>
            <div class="col-md-4">
                <h3>Consultoría Técnica</h3>
                <p>Proporcionamos servicios de consultoría técnica para ayudar a nuestros clientes a encontrar las
                    mejores soluciones electrónicas.</p>
            </div>
            <div class="col-md-4">
                <h3>Soporte Técnico</h3>
                <p>Ofrecemos soporte técnico integral para garantizar el correcto funcionamiento de nuestros productos y
                    servicios.</p>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer bg-light text-center py-3">
        <p>&copy; 2024 Electro Cordoba | <a href="mailto:soporte@servicios.com">soporte@servicios.com</a> | <a
                href="http://www.servicios.com">http://www.servicios.com</a></p>
    </footer>
    <!-- Archivos JavaScript necesarios -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>