<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="navbar.js"></script>
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
    <?php
    if (isset($_POST['enviar'])) {
        $idmaterial = $_POST['idmaterial'];
        $material = $_POST['material'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        $sql = "UPDATE componentes SET material = '$material', descripcion = '$descripcion', estado = '$estado' WHERE idmaterial = $idmaterial";
        $result = mysqli_query($conexion, $sql);

        if ($result) {
            echo "<script language='JavaScript'>alert('Material actualizado exitosamente');location.assign('components.php');</script>";
        } else {
            echo "<script language='JavaScript'>alert('Error al actualizar el material');location.assign('components.php');</script>";
        }

        mysqli_close($conexion);
    } else {
        $idmaterial = $_GET['idmaterial'];
        $sql = "SELECT * FROM componentes WHERE idmaterial = $idmaterial";
        $result = mysqli_query($conexion, $sql);

        $filas = mysqli_fetch_assoc($result);
        $idmaterial = $filas['idmaterial'];
        $material = $filas['material'];
        $descripcion = $filas['descripcion'];
        $estado = $filas['estado'];

        mysqli_close($conexion);
        ?>



        <div class="container-flex container mt-5">
            <h2 class="mb-4">Editar Material</h2>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label class="form-label">Material:</label>
                    <input type="text" name="material" class="form-control"
                        value="<?php echo htmlspecialchars($material); ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Descripción:</label>
                    <input type="text" name="descripcion" class="form-control"
                        value="<?php echo htmlspecialchars($descripcion); ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Estado:</label>
                    <input type="number" name="estado" class="form-control" value="<?php echo htmlspecialchars($estado); ?>"
                        required>
                </div>

                <input type="hidden" name="idmaterial" value="<?php echo $idmaterial; ?>">
                <button type="submit" name="enviar" class="btn btn-primary btn-block">Actualizar</button>
                <a href="components.php" class="btn btn-secondary btn-block">Regresar</a>
            </form>
        </div>


        <?php
    }
    ?>

    <!-- Pie de página -->
    <div id="footer"></div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>