<?php
include ('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $idmaterial = $_POST['idmaterial'];
        $material = $_POST['material'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        $sql = "update componentes set material = '$material', descripcion = '$descripcion', estado = '$estado' where idmaterial = $idmaterial";
        $result = mysqli_query($conexion, $sql);

        if ($result) {
            echo "<script language='JavaScript'>alert('Material actualizado exitosamente');location.assign('components.php');</script>";
        } else {
            echo "<script language='JavaScript'>alert('Error al actualizar el material');location.assign('components.php');</script>";
        }

        mysqli_close($conexion);
    } else {
        $idmaterial = $_GET['idmaterial'];
        $sql = "select * from componentes where idmaterial = $idmaterial";
        $result = mysqli_query($conexion, $sql);

        $filas = mysqli_fetch_assoc($result);
        $idmaterial = $filas['idmaterial'];
        $material = $filas['material'];
        $descripcion = $filas['descripcion'];
        $estado = $filas['estado'];

        mysqli_close($conexion);

        ?>

        <h2>Editar material</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label>Material:</label>
            <input type="text" name="material" value="<?php echo $material; ?>"><br>
            <label>Descripción:</label>
            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>"><br>
            <label>Estado:</label>
            <input type="number" name="estado" value="<?php echo $estado; ?>"><br>

            <input type="hidden" name="idmaterial" value="<?php echo $idmaterial; ?>">
            <input type="submit" name="enviar" value="ACTUALIZAR">
            <a href="components.php">Regresar</a>

        </form>
        <?php
    }
    ?>

</body>

</html>