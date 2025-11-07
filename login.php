<?php
session_start();
require_once('config/db.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($contrasena, $user['contrasena'])) {
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['rol'] = $user['rol'];
        header("Location: dashboard..php");
        exit;
    } else {
        $_SESSION['error'] = "❌ Usuario o contraseña incorrectos";
        header("Location: index.php"); // ✅ corregido
        exit;
    }
}
?>
