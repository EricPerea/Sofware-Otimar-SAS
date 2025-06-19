<?php
require_once('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Buscar el usuario
    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :usuario");
    $stmt->execute(['usuario' => $usuario]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar contraseña
        if (password_verify($password, $user['password'])) {
            $_SESSION['usuario'] = $usuario;
            setcookie("usuario", $usuario, time() + 3600); // 1 hora
            header("Location: ../index.php");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>

