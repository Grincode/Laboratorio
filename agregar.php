<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script>
        // Pasar el nombre de usuario de la sesión a JavaScript
        const username = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>";
    </script>
</head>

<body>
    <div id="navbar"></div>
    <div class="container mt-5">
        <h2 class="text-center">Agregar nuevo material</h2>

        <?php
        if (isset($_POST['enviar'])) {
            $material = $_POST['material'];
            $descripcion = $_POST['descripcion'];
            $estado = $_POST['estado'];

            // Incluir archivo de conexión
            include('conexion.php');

            // Usar sentencias preparadas para evitar inyecciones SQL
            $stmt = $conexion->prepare("INSERT INTO componentes (material, descripcion, estado) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $material, $descripcion, $estado);

            if ($stmt->execute()) {
                echo "<script language='JavaScript'>alert('Material agregado exitosamente');location.assign('components.php');</script>";
            } else {
                echo "<script language='JavaScript'>alert('Error al agregar el material');location.assign('components.php');</script>";
            }

            $stmt->close();
            $conexion->close();
        }
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="bg-light p-4 rounded shadow">
            <div class="form-group">
                <label for="material">Material:</label>
                <input type="text" name="material" id="material" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="number" name="estado" id="estado" class="form-control" min="0" max="1" required>
            </div>

            <button type="submit" name="enviar" class="btn btn-primary btn-block">Agregar</button>
            <a href="components.php" class="btn btn-secondary btn-block">Regresar</a>
        </form>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>
    <!-- Scripts -->
    <script src="navbar.js" defer></script>
    <script src="footer.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>