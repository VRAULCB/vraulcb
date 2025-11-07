<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>

<?php
// index.php — pantalla inicial de selección
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sede = $_POST["sede"];
    $piso = $_POST["piso"];
    header("Location: plano.php?sede=" . urlencode($sede) . "&piso=" . urlencode($piso));
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar plano - Plano Interactivo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .selector-container {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 360px;
            transition: transform 0.2s ease-in-out;
        }
        .selector-container:hover {
            transform: translateY(-4px);
        }
        h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: 600;
            color: #555;
        }
        select {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #fefefe;
        }
        button {
            margin-top: 1.8rem;
            background: #0066ff;
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.2s ease;
        }
        button:hover {
            background: #0053cc;
        }
        .logo {
            width: 60px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <form method="POST" class="selector-container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <h1>Seleccionar ubicación</h1>

        <label for="sede">Sede:</label>
        <select name="sede" id="sede" required>
            <option value="">-- Selecciona una sede --</option>
            <option value="Central">La Paz</option>
            <option value="Sur">Sur</option>
            <option value="Norte">Norte</option>
            <option value="Este">Este</option>
        </select>

        <label for="piso">Piso:</label>
        <select name="piso" id="piso" required>
            <option value="">-- Selecciona un piso --</option>
            <option value="1">Piso 1</option>
            <option value="2">Piso 2</option>
            <option value="3">Piso 3</option>
            <option value="4">Piso 4</option>
        </select>

        <button type="submit">Visualizar</button>
    </form>
</body>
</html>
