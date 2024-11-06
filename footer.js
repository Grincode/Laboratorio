// footer.js
document.addEventListener("DOMContentLoaded", function () {
    const footerContainer = document.getElementById("footer");

    if (footerContainer) {
        footerContainer.innerHTML = `
            <footer class="footer bg-light py-3">
                <div class="container text-center">
                    <p class="mb-0">&copy; ${new Date().getFullYear()} Electro CBA. Todos los derechos reservados.</p>
                    <a href="mailto:soporte@servicios.com">soporte@servicios.com</a> | <a
                href="http://www.servicios.com">http://www.servicios.com</a></p>
                </div>
            </footer>
        `;
    }
});
