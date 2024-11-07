<?php
session_start();

// Definir $role y $username usando el operador de fusión de null
$role = $_SESSION['role'] ?? null;
$username = $_SESSION['username'] ?? '';

// Redirigir si es necesario
if (isset($_GET['action']) && in_array($_GET['action'], ['agregar', 'editar', 'eliminar']) && !$role) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes - Empresa Electrónica</title>

    <!-- Enlazar con el archivo de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="navbar.js" defer></script>
    <script src="footer.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Asegúrate de que 'username' tenga un valor adecuado
        const username = "<?php echo htmlspecialchars($username); ?>";

        // Función para confirmar eliminación
        function confirmar() {
            return confirm("¿Estás seguro de que deseas eliminar este componente?");
        }
    </script>
</head>

<body>
    <?php
    include('conexion.php');
    $sql = "SELECT * FROM componentes";
    $result = mysqli_query($conexion, $sql);
    ?>

    <!-- Barra de navegación -->
    <div id="navbar"></div>

    <div class="container mt-5">
        <h2 class="mt-5">Lista de Componentes</h2>

        <!-- Mostrar solo el botón de agregar si el usuario tiene permisos -->
        <?php if (isset($role) && $role !== 'user' && $role): ?>
            <a href="agregar.php" class="btn btn-primary mb-3">Agregar material</a>
        <?php endif; ?>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Material</th>
                    <th>Material</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($filas = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($filas['idmaterial']); ?></td>
                        <td><?php echo htmlspecialchars($filas['material']); ?></td>
                        <td><?php echo htmlspecialchars($filas['descripcion']); ?></td>
                        <td><?php echo htmlspecialchars($filas['estado']); ?></td>
                        <td>
                            <!-- Mostrar los botones de editar y eliminar solo si hay sesión activa y no es un 'user' -->
                            <?php if (isset($role) && $role !== 'user' && $role): ?>
                                <a href="editar.php?idmaterial=<?php echo htmlspecialchars($filas['idmaterial']); ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                                <a href="eliminar.php?idmaterial=<?php echo htmlspecialchars($filas['idmaterial']); ?>"
                                    class="btn btn-danger btn-sm" onclick="return confirmar()">Eliminar</a>
                            <?php else: ?>
                                <span>-</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php mysqli_close($conexion); ?>
    </div>

    <!-- Pie de página -->
    <div id="footer"></div>

    <!-- Enlaces para los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
</body>

</html>