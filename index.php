<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesión | Plano Interactivo</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div class="login-container">
    <img src="img/logo.png" alt="Logo" class="logo">
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
      <input type="text" name="usuario" placeholder="Usuario" required>
      <input type="password" name="contrasena" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
    <?php if(isset($_SESSION['error'])): ?>
      <p class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
