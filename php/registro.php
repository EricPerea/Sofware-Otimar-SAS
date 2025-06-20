<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_doc = $_POST['numero_doc'];
    $nacionalidad = $_POST['nacionalidad'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Encriptar la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Verificar si el usuario o correo ya existe
        $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :usuario OR email = :email");
        $stmt->execute(['usuario' => $usuario, 'email' => $email]);

        if ($stmt->rowCount() > 0) {
            header("Location: ../pages/Formularioinicio.php?mensaje=El+usuario+o+correo+ya+existe");
            exit;
        } else {
            // Insertar nuevo usuario
            $stmt = $pdo->prepare("INSERT INTO users (
                nombre, tipo_documento, numero_doc, nacionalidad,
                celular, email, fecha_nacimiento, usuario, password
            ) VALUES (
                :nombre, :tipo_documento, :numero_doc, :nacionalidad,
                :celular, :email, :fecha_nacimiento, :usuario, :password
            )");

            $stmt->execute([
                'nombre' => $nombre,
                'tipo_documento' => $tipo_documento,
                'numero_doc' => $numero_doc,
                'nacionalidad' => $nacionalidad,
                'celular' => $celular,
                'email' => $email,
                'fecha_nacimiento' => $fecha_nacimiento,
                'usuario' => $usuario,
                'password' => $passwordHash
            ]);

            header("Location: ../pages/Formularioinicio.php?mensaje=Usuario+registrado+exitosamente");
            exit;
        }
    } catch (PDOException $e) {
        header("Location: ../pages/Formularioinicio.php?mensaje=Error:+".$e->getMessage());
        exit;
    }
}
?>
