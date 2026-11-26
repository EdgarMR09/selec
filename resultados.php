<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Paquete Turístico</title>
</head>
<body>
    <h1>Resumen del Paquete Turístico</h1>

    <?php
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';

    $destinos = $_POST['destinos'] ?? [];
    $actividades = $_POST['actividades'] ?? [];
    $servicios = $_POST['servicios'] ?? [];

    $totalDestinos = count($destinos);
    $totalActividades = count($actividades);
    $totalServicios = count($servicios);
    $totalGeneral = $totalDestinos + $totalActividades + $totalServicios;
    ?>

    <h2>Datos del cliente</h2>
    <p><strong>Nombre completo:</strong> <?php echo htmlspecialchars($nombre); ?></p>
    <p><strong>Correo electrónico:</strong> <?php echo htmlspecialchars($correo); ?></p>

    <h2>Destinos seleccionados</h2>
    <?php
    if ($totalDestinos > 0) {
        echo "<ul>";
        foreach ($destinos as $destino) {
            echo "<li>" . htmlspecialchars($destino) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún elemento</p>";
    }
    ?>
    <p><strong>Total de destinos seleccionados:</strong> <?php echo $totalDestinos; ?></p>

    <h2>Actividades seleccionadas</h2>
    <?php
    if ($totalActividades > 0) {
        echo "<ul>";
        foreach ($actividades as $actividad) {
            echo "<li>" . htmlspecialchars($actividad) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún elemento</p>";
    }
    ?>
    <p><strong>Total de actividades seleccionadas:</strong> <?php echo $totalActividades; ?></p>

    <h2>Servicios adicionales seleccionados</h2>
    <?php
    if ($totalServicios > 0) {
        echo "<ul>";
        foreach ($servicios as $servicio) {
            echo "<li>" . htmlspecialchars($servicio) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún elemento</p>";
    }
    ?>
    <p><strong>Total de servicios adicionales seleccionados:</strong> <?php echo $totalServicios; ?></p>

    <h2>Totales</h2>
    <p><strong>Total general de elementos seleccionados:</strong> <?php echo $totalGeneral; ?></p>

    <br>
    <a href="index.html">Volver al formulario</a>
</body>
</html>