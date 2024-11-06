<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Empresa Electrónica</title>
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

    <!-- Contenido principal -->
    <div class="full-background">
        <div class="content-box">
            <h1 class="display-4" data-text="Bienvenido a Empresa Electrónica">Electro Cordoba</h1>
            <p class="lead">Proveemos componentes electrónicos de alta calidad y soluciones innovadoras para todas tus
                necesidades tecnológicas.</p>
            <hr class="my-4">
            <p>Explora nuestros servicios y conoce más sobre nosotros.</p>
            <a class="btn btn-primary btn-lg" href="about.php" role="button">Más sobre nosotros</a>
        </div>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>