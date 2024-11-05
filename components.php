<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes - Empresa Electrónica</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm("¿Desea eliminar este material?");
        }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include ('conexion.php');
    $sql = "SELECT * FROM componentes";
    $result = mysqli_query($conexion, $sql);
    ?>

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

    <div class="container mt-5">
        <h2 class="mt-5">Lista de Componentes</h2>
        <a href="agregar.php" class="btn btn-primary mb-3">Agregar material</a>
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
                        <td> <?php echo htmlspecialchars($filas['idmaterial']); ?></td>
                        <td> <?php echo htmlspecialchars($filas['material']); ?></td>
                        <td> <?php echo htmlspecialchars($filas['descripcion']); ?></td>
                        <td> <?php echo htmlspecialchars($filas['estado']); ?></td>
                        <td>
                            <a href="editar.php?idmaterial=<?php echo $filas['idmaterial']; ?>"
                                class="btn btn-warning btn-sm">Editar</a>
                            <a href="eliminar.php?idmaterial=<?php echo $filas['idmaterial']; ?>"
                                class="btn btn-danger btn-sm" onclick="return confirmar()">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        mysqli_close($conexion);
        ?>
    </div>

    <footer class="footer bg-light text-center mt-5">
        <p>&copy; 2024 Electro Cordoba | <a href="mailto:soporte@servicios.com">soporte@servicios.com</a> | <a
                href="http://www.servicios.com">www.servicios.com</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>