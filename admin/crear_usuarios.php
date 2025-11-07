<?php
require_once('config/db.php');

try {
    // 🔧 Datos del usuario que quieres crear
    $nombre = 'Administrador';
    $usuario = 'victor';
    $contrasena_plana = 'victor'; // contraseña en texto plano
    $rol = 'admin';

    // Verificar si ya existe el usuario
    $check = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $check->execute([$usuario]);

    if ($check->rowCount() > 0) {
        echo "⚠️ El usuario '$usuario' ya existe.<br>";
    } else {
        // Crear usuario con contraseña encriptada
        $contrasena_hash = password_hash($contrasena_plana, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, usuario, contrasena, rol) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nombre, $usuario, $contrasena_hash, $rol]);

        echo "✅ Usuario '$usuario' creado correctamente.<br>";
        echo "➡️ Usuario: <strong>$usuario</strong><br>";
        echo "➡️ Contraseña: <strong>$contrasena_plana</strong><br>";
        echo "➡️ Rol: <strong>$rol</strong><br>";
    }
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
