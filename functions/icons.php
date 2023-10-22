<?php

function theme_icons() {
    ?>
        <style>

            /* iconos de redes sociales */
            li a[href*="facebook"]:before{background-color:#3c5a99; content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg');}
            
        </style>
    <?php
}
add_action('wp_head', 'theme_icons');
