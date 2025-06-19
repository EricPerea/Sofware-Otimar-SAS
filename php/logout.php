<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = [];

// Eliminar la cookie si existe
if (isset($_COOKIE['usuario'])) {
    setcookie("usuario", "", time() - 3600, "/"); // Expira en el pasado
}

// Destruir la sesión completamente
session_destroy();

// Redirigir al inicio o login
header("Location: ../index.php");
exit;
?>
