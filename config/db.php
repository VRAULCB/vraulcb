<?php
$host = "localhost";
$user = "root";     // tu usuario de MySQL
$pass = "";          // tu contraseña de MySQL
$db   = "plano_interactivo";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>
