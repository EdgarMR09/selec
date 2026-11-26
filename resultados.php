<?php
    
    echo "<h2>Datos del cliente</h2>";
    $nombre = $_POST['nombre'] ?? [];
    $correo = $_POST['correo'] ?? [];
    echo "<p><strong>Nombre completo:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Correo electrónico:</strong> " . htmlspecialchars($correo) . "</p>";

    echo "<h2>Destino Turisticos</h2>";
    $Destinos = $_POST['Destinos'];
    foreach($Destinos as $dt){
    echo $dt . "<br>";
    }


?>