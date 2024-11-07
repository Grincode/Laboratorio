<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<script>
    // Asignar el nombre de usuario a una variable JavaScript
    const username = "<?php echo $username; ?>";
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php" id="logo">
        <svg width="40" height="40" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="10" width="180" height="180" rx="15" fill="#1e90ff" stroke="#f0f0f0" stroke-width="5" />
            <polygon points="100,50 120,100 85,100 105,150 80,110 115,110" fill="#f0f0f0" />
        </svg>
        <span>Electro CBA</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="about.php">Acerca de</a></li>
            <li class="nav-item"><a class="nav-link" href="services.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="components.php">Componentes</a></li>
            <li class="nav-item">
                <a class="btn btn-primary nav-link text-white" href="login.php" role="button">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Empresa Electrónica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Barra de navegación -->
    <div id="navbar"></div>

    <!-- Contenido principal -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="content-box">
            <h2 class="mb-6">Iniciar Sesión</h2>

            <!-- Mostrar mensaje de error si el parámetro error está en la URL -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="alert alert-danger" role="alert">
                    Usuario o contraseña incorrectos. Intenta nuevamente.
                </div>
            <?php endif; ?>

            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="navbar.js"></script>
    <script src="footer.js"></script>
</body>

</html>