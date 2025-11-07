<?php
// --- Parte PHP: Procesa la subida ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = "uploads/";

    // Crea la carpeta si no existe
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $targetFile = $targetDir . basename($_FILES['image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica si es una imagen real
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        echo "<p style='color:red'>El archivo no es una imagen válida.</p>";
        $uploadOk = 0;
    }

    // Verifica tamaño (ejemplo: 5 MB máximo)
    if ($_FILES['image']['size'] > 5 * 1024 * 1024) {
        echo "<p style='color:red'>El archivo es demasiado grande (máx. 5 MB).</p>";
        $uploadOk = 0;
    }

    // Permitir solo formatos comunes
    $allowedFormats = ["jpg", "jpeg", "png", "gif", "webp"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "<p style='color:red'>Solo se permiten archivos JPG, JPEG, PNG, GIF o WEBP.</p>";
        $uploadOk = 0;
    }

    // Si todo está correcto, mueve el archivo
    if ($uploadOk) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo "<p style='color:green'>Imagen subida correctamente: <strong>" . htmlspecialchars(basename($_FILES['image']['name'])) . "</strong></p>";
        } else {
            echo "<p style='color:red'>Error al subir la imagen.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Subir Imagen con Vista Previa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background: #f9f9f9;
    }
    .container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      width: 400px;
    }
    input[type="file"] {
      margin-top: 10px;
    }
    #preview {
      display: none;
      margin-top: 15px;
      max-width: 100%;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 5px;
    }
    button {
      margin-top: 15px;
      background-color: #0078d7;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #005fa3;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Subir imagen con vista previa</h2>
  
  <form method="post" enctype="multipart/form-data">
    <label for="imageInput">Selecciona una imagen:</label><br>
    <input type="file" id="imageInput" name="image" accept="image/*" required>
    
    <img id="preview" src="" alt="Vista previa">
    
    <br>
    <button type="submit">Subir imagen</button>
  </form>
</div>

<script>
// --- Parte JavaScript: Mostrar vista previa ---
const imageInput = document.getElementById('imageInput');
const preview = document.getElementById('preview');

imageInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      preview.style.display = 'block';
      preview.src = e.target.result;
    }
    reader.readAsDataURL(file);
  } else {
    preview.style.display = 'none';
    preview.src = '';
  }
});
</script>

</body>
</html>
