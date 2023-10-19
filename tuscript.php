<?php
$width = $_GET['width'];

// Determinar el contenido basado en la resolución
if ($width < 768) {
    echo "Contenido para pantallas pequeñas.";
} else {
    echo "Contenido para pantallas grandes.";
}
?>