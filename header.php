<?php
echo '<!DOCTYPE html>
<html '; language_attributes(); echo '>
    <head>
        <meta charset="'; bloginfo( 'charset' ); echo '">
        <meta name="description" content="'; bloginfo( 'description' ); echo '">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        wp_head();
        ?>
        <script type="text/javascript">
            function detectResolution() {
                var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

                // Hacer una llamada a un script PHP con la resolución detectada
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // El script PHP puede devolver una respuesta para mostrar el contenido correspondiente.
                        alert(this.responseText);
                    }
                };
                xhttp.open("GET", "tuscript.php?width=" + width, true);
                xhttp.send();
            }
        </script>
    <?php    
    echo '</head>
    <body '; body_class(); echo ' onload="detectResolution()">
        <header class="container main-header">
            <section class="section header-content">';
            if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                
            } else {
                
            }
            echo '</section>
        </header>';