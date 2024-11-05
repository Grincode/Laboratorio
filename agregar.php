<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $material = $_POST['material'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        // Incluir archivo de conexión
        include ('conexion.php');

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

    <h2>Agregar nuevo material</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Material:</label>
        <input type="text" name="material" required><br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required><br>
        <label>Estado:</label>
        <input type="number" name="estado" min="0" max="1" required><br>
        <input type="submit" name="enviar" value="Agregar">
        <a href="components.php">Regresar</a>
    </form>

</body>

</html>