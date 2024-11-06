function loadNavbar() {
    const currentPage = window.location.pathname.split("/").pop();

    // Solo mostrar el "Bienvenido" si no estamos en la página de login
    if (currentPage !== "login.php" && username) {
        document.getElementById("navbar").innerHTML = `
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
                            <span class="nav-link" style="font-weight: bold; color: #007bff; padding: 5px 10px; border: 1px solid #9c9c9c; border-radius: 5px;">Bienvenido!, ${username}</span>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger nav-link text-white" href="logout.php" role="button">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        `;
    } else if (currentPage !== "login.php") {
        document.getElementById("navbar").innerHTML = `
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
        `;
    }

    // Seleccionar todos los enlaces de navegación
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    // Asignar la clase "active" al enlace que coincide con la página actual
    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.parentElement.classList.add("active");
        }
    });
}

// Llama a la función para cargar el navbar
document.addEventListener("DOMContentLoaded", loadNavbar);
