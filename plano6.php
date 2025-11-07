<?php
$sede = $_GET['sede'] ?? 'Desconocida';
$piso = $_GET['piso'] ?? 'N/A';

// Datos de ejemplo - luego los cargas de BD o CSV
$equipos = [
    [
        'id' => 'pc1',
        'ip' => '10.4.100.81',
        'nombre' => 'JOSE ANTONIO',
        'tipo' => 'pc',
        'ubicacion' => 'Oficina Soporte',
        'departamento' => 'La Paz',
        'x' => 100,
        'y' => 50,
        'comentario' => 'IP duplicada - revisar configuración'
    ],
    [
        'id' => 'pc1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DERICK',
        'tipo' => 'pc',
        'ubicacion' => 'Oficina Soporte',
        'departamento' => 'La Paz',
        'x' => 100,
        'y' => 115,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 40,
        'y' => 170,
        'comentario' => 'Requiere mantenimiento preventivo'
    ],
       [
        'id' => 'pc2',
        'ip' => '10.4.100.39', 
        'nombre' => 'Victor Raul',
        'tipo' => 'pc',
        'ubicacion' => 'Oficina Soporte',
        'departamento' => 'La Paz',
        'x' => 100,
        'y' => 240,
        'comentario' => 'Equipo nuevo - funcionando correctamente'
    ],
       [
        'id' => 'pc2',
        'ip' => '10.4.100.251', 
        'nombre' => 'Rodrigo',
        'tipo' => 'pc',
        'ubicacion' => 'Oficina Soporte',
        'departamento' => 'La Paz',
        'x' => 100,
        'y' => 300,
        'comentario' => 'Equipo nuevo - funcionando correctamente'
    ],
    [
        'id' => 'servidor1',
        'ip' => '10.4.100.112',
        'nombre' => 'Servidor Soporte',
        'tipo' => 'servidor',
        'ubicacion' => 'Oficina de Soporte',
        'departamento' => 'TI',
        'x' => 30,
        'y' => 30,
        'comentario' => 'Critico - no apagar'
    ],
    [
        'id' => 'pc1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DESCONOCIDO',
        'tipo' => 'pc',
        'ubicacion' => 'NN',
        'departamento' => 'La Paz',
        'x' => 210,
        'y' => 115,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 210,
        'y' => 170,
        'comentario' => 'Requiere mantenimiento preventivo'
    ],
    [
        'id' => 'pc1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DESCONOCIDO',
        'tipo' => 'pc',
        'ubicacion' => 'NN',
        'departamento' => 'La Paz',
        'x' => 310,
        'y' => 115,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 310,
        'y' => 170,
        'comentario' => 'Requiere mantenimiento preventivo'
    ],
    [
        'id' => 'pc1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DESCONOCIDO',
        'tipo' => 'pc',
        'ubicacion' => 'NN',
        'departamento' => 'La Paz',
        'x' => 410,
        'y' => 115,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 410,
        'y' => 170,
        'comentario' => 'Requiere mantenimiento preventivo'
    ],
    [
        'id' => 'pcD1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DESCONOCIDO',
        'tipo' => 'pc',
        'ubicacion' => 'NN',
        'departamento' => 'La Paz',
        'x' => 110,
        'y' => 415,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impDresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 110,
        'y' => 470,
        'comentario' => 'Requiere mantenimiento preventivo'
    ],
        [
        'id' => 'pcD1_2',
        'ip' => '10.4.100.202',
        'nombre' => 'DESCONOCIDO',
        'tipo' => 'pc',
        'ubicacion' => 'NN',
        'departamento' => 'La Paz',
        'x' => 80,
        'y' => 635,
        'comentario' => 'IP duplicada - este equipo será reemplazado'
    ],
    [
        'id' => 'impDresora1',
        'ip' => '10.4.100.50',
        'nombre' => 'Kyosera 3655dm',
        'tipo' => 'impresora',
        'ubicacion' => 'Sala de impresión',
        'departamento' => 'Recursos',
        'x' => 110,
        'y' => 700,
        'comentario' => 'Requiere mantenimiento preventivo'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano Interactivo - <?php echo $sede; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="header">
        <div class="header-left">
            <h1>🏢 La Paz Primer piso</h1>
            <div class="subtitle">
                <?php echo $sede; ?> - Piso <?php echo $piso; ?>
            </div>
        </div>
        
        <div class="header-right">
            <div class="user-info">
                <div class="user-name">Victor Raul</div>
                <div class="user-role">Administrador de Red</div>
            </div>
            
            <div class="header-busqueda">
                <input type="text" id="buscador-header" placeholder="🔍 Buscar por IP, nombre, departamento...">
            </div>
        </div>
    </div>

    <div class="content">
        <!-- PLANO CON SVG DE FONDO + EQUIPOS HTML -->
        <div class="plano-container" id="plano-container">
            <!-- Quitamos la barra de búsqueda que estaba aquí -->
            
            <div class="plano" id="plano">
                <?php foreach ($equipos as $equipo): ?>
                    <div class="equipo <?php echo $equipo['tipo']; ?>" 
                         style="left: <?php echo $equipo['x']; ?>px; top: <?php echo $equipo['y']; ?>px;"
                         data-id="<?php echo $equipo['id']; ?>"
                         data-ip="<?php echo $equipo['ip']; ?>"
                         data-nombre="<?php echo $equipo['nombre']; ?>"
                         data-tipo="<?php echo $equipo['tipo']; ?>"
                         data-ubicacion="<?php echo $equipo['ubicacion']; ?>"
                         data-departamento="<?php echo $equipo['departamento']; ?>"
                         data-comentario="<?php echo $equipo['comentario']; ?>">
                        
                        <div class="equipo-contenido">
                            <div class="equipo-icono">
                                <?php 
                                switch($equipo['tipo']) {
                                    case 'pc': echo '💻'; break;
                                    case 'impresora': echo '🖨️'; break;
                                    case 'servidor': echo '🖥️'; break;
                                    default: echo '❓';
                                }
                                ?>
                            </div>
                            <div class="equipo-ip"><?php echo $equipo['ip']; ?></div>
                        </div>
                        
                        <div class="etiqueta">
                            <strong><?php echo $equipo['nombre']; ?></strong><br>
                            <?php echo $equipo['ip']; ?><br>
                            <?php echo $equipo['departamento']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ... el resto del código igual ... -->
                
        

            <!-- PANEL DE INFORMACIÓN -->
            <div class="info-panel">
                <h2>📍 Información del Equipo</h2>
                <div class="info-card">
                    <div class="placeholder" id="placeholder">
                        <div class="icon">👆</div>
                        <p>Selecciona un equipo en el plano</p>
                    </div>
                    
                    <div class="info-items" id="info-items" style="display: none;">
                        <div class="info-item">
                            <span class="info-label">Dirección IP</span>
                            <span class="info-value ip" id="info-ip">-</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Nombre</span>
                            <span class="info-value nombre" id="info-nombre">-</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Tipo</span>
                            <span class="info-value tipo" id="info-tipo">-</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Ubicación</span>
                            <span class="info-value ubicacion" id="info-ubicacion">-</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Departamento</span>
                            <span class="info-value" id="info-departamento">-</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">ID Equipo</span>
                            <span class="info-value" id="info-id">-</span>
                        </div>
                        <!-- NUEVO ITEM PARA COMENTARIOS -->
                        <div class="info-item comentario-item">
                            <span class="info-label">Comentarios</span>
                            <span class="info-value comentario" id="info-comentario">-</span>
                        </div>
                    </div>
                </div>

                <!-- CONTADORES -->
                <div class="contadores">
                    <div class="grid-contadores">
                        <div>
                            <div class="contador-numero" id="total-equipos"><?php echo count($equipos); ?></div>
                            <div class="contador-etiqueta">Total Equipos</div>
                        </div>
                        <div>
                            <div class="contador-numero" id="equipo-seleccionado">0</div>
                            <div class="contador-etiqueta">Seleccionado</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>