<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Aquí se validan las credenciales (esto debe reemplazarse con tu lógica de autenticación)
if ($username == 'admin' && $password == 'admin123') {
    $_SESSION['role'] = 'admin';
    header("Location: componentes.php");
} elseif ($username == 'user' && $password == 'user123') {
    $_SESSION['role'] = 'user';
    header("Location: componentes.php");
} else {
    echo "Credenciales incorrectas";
}
?>