<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Empresa Electrónica</title>
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
    <div class="container-flex container mt-5">
        <h2 class="mb-4">Contacto</h2>
        <form>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>