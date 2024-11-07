# Empresa Electrónica - Proyecto Web

Este es un proyecto de sitio web para una empresa de servicios electrónicos, diseñado en PHP y Bootstrap. El sitio ofrece una interfaz limpia y moderna con secciones clave para presentar los servicios de la empresa, junto con un sistema básico de autenticación y gestión de usuarios.

## Descripción del Proyecto

El sitio web permite a los usuarios navegar por varias secciones, incluyendo un resumen de los servicios que ofrece la empresa y una página de contacto. Los usuarios pueden autenticarse como administradores o usuarios comunes, lo cual les otorga diferentes permisos de acceso. 

- **Administradores**: Pueden gestionar la lista de componentes, agregar, modificar y eliminar entradas.
- **Usuarios comunes**: Solo tienen permisos de visualización para ver las órdenes o componentes.

## Estructura de Archivos

- **index.php**: Página de inicio que incluye una barra de navegación y un pie de página.
- **services.php**: Página de servicios que muestra información sobre los servicios ofrecidos con imágenes ilustrativas.
- **abm.php**: Página de gestión (alta, baja, modificación) de componentes electrónicos.
- **process_login.php**: Procesa el formulario de inicio de sesión y gestiona la autenticación de usuarios.
- **about.html**: Página "Acerca de" que describe a la empresa.
- **contact.html**: Página de contacto con un formulario para enviar mensajes.
- **navbar.js**: Componente de JavaScript que carga la barra de navegación de manera reutilizable.
- **footer.js**: Componente de JavaScript que carga el pie de página.
- **styles.css**: Estilos personalizados del proyecto.

## Requisitos del Sistema

- **PHP**: Versión 7.4 o superior.
- **Servidor Web**: Se recomienda Apache o cualquier servidor compatible con PHP.
- **Base de Datos**: MySQL (requiere una base de datos configurada con una tabla `COMPONENTES`).
- **Bootstrap**: Utilizado a través de CDN.
