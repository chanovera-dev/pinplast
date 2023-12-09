<?php

function pinplast_theme_custom_backgrounds() {
    ?>
        <style>
            .about-us__image{background:url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}

            

            #slideshow .slide.slide1 {
                background: url('<?php echo get_theme_mod('slide_img1_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-1-full.jpg'); ?>');
                background-repeat: no-repeat;
                background-position: 50% 50%;
                background-size: cover;
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_backgrounds');