<?php
session_start();

// Datos de ejemplo
$admin_user = "admin";
$admin_password = "admin123";
$user = "user";
$user_password = "user123";

// Obtiene los datos del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica si el usuario es administrador o usuario común
if ($username === $admin_user && $password === $admin_password) {
    $_SESSION['role'] = 'admin';
    $_SESSION['username'] = $admin_user; // Guarda el nombre del usuario en la sesión
    header("Location: components.php");
    exit();
} elseif ($username === $user && $password === $user_password) {
    $_SESSION['role'] = 'user';
    $_SESSION['username'] = $user; // Guarda el nombre del usuario en la sesión
    header("Location: components.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>