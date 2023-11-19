<?php

function pinplast_theme_custom_icons() {
    ?>
        <style>
            /* iconos en el menú */
            #responsive-header ul li.menu-item-has-children > a:after,
            .bottom-bar .primary ul li.menu-item-has-children > a:after{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/chevron.svg');}
            .top-bar ul li.menu-item-has-children > a:after{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-min.svg');}
            
            /* iconos de redes sociales */
            .social .menu li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg');}
            .social .menu li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg');}
            .social .menu li a[href*="youtube"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg');}
            .social .menu li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg');}
            .social .menu li a[href*="sites"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/google.svg');}

            /* iconos de woocommerce */
            .woocommerce-product-gallery__trigger:before{background:url('<?php echo get_template_directory_uri(); ?>/assets/icons/zoom-in.svg');}
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_icons');