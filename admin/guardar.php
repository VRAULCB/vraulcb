<?php
// Ruta del archivo JSON
$archivo = '../zonas.json';

// Cargar zonas existentes
$zonas = json_decode(file_get_contents($archivo), true);

// Nueva zona desde el formulario
$nueva_zona = [
    'id' => $_POST['id'],
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion']
];

// Agregarla al array
$zonas[] = $nueva_zona;

// Guardar de nuevo en el JSON
file_put_contents($archivo, json_encode($zonas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "<p style='text-align:center;'>✅ Zona agregada correctamente.</p>";
echo "<p style='text-align:center;'><a href='../index.php'>Volver al plano</a></p>";
