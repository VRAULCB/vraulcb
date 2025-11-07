<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Zona - Plano Interactivo</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h1>🧱 Agregar Nueva Zona</h1>

  <form action="guardar.php" method="POST" style="width: 400px; margin: auto;">
    <label>ID de la zona (igual que el ID en el SVG):</label><br>
    <input type="text" name="id" required style="width: 100%;"><br><br>

    <label>Nombre de la zona:</label><br>
    <input type="text" name="nombre" required style="width: 100%;"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="4" required style="width: 100%;"></textarea><br><br>

    <button type="submit">✅ Guardar zona</button>
  </form>

  <p style="text-align:center; margin-top:20px;">
    <a href="../index.php">⬅️ Volver al plano</a>
  </p>
</body>
</html>
