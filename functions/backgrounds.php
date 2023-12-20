<?php

function pinplast_theme_custom_backgrounds() {
    ?>
        <style>
            .about-us__image{background:url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}

            #slideshow .slide1 {background:url('<?php echo get_theme_mod('slide_img1_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-1-mobile-new.jpg'); ?>');}
            #slideshow .slide2 {background:url('<?php echo get_theme_mod('slide_img2_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-2-mobile-new.jpg'); ?>');}
            #slideshow .slide3 {background:url('<?php echo get_theme_mod('slide_img3_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-3-mobile-new.jpg'); ?>');}

            .catalog-link{background:url('<?php echo get_theme_mod('catalog_link_mobile', get_bloginfo('template_url') . '/assets/img/banners/banner-1-mobile-new.jpg'); ?>');}

            @media(min-width:768px){
                .catalog-link{background:url('<?php echo get_theme_mod('catalog_link_desktop', get_bloginfo('template_url') . '/assets/img/banners/banner-1-new.jpg'); ?>');}
            }

            @media(min-width:1024px){
                #slideshow .slide1{background:url('<?php echo get_theme_mod('slide_img1_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-1-new.jpg'); ?>');}
                #slideshow .slide2{background:url('<?php echo get_theme_mod('slide_img2_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-2-new.jpg'); ?>');}
                #slideshow .slide3{background:url('<?php echo get_theme_mod('slide_img3_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-3-new.jpg'); ?>');}
            }

            @media(min-width:1200px){
                #slideshow .slide1{background:url('<?php echo get_theme_mod('slide_img1_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-1-full-new.jpg'); ?>');}
                #slideshow .slide2{background:url('<?php echo get_theme_mod('slide_img2_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-2-full-new.jpg'); ?>');}
                #slideshow .slide3{background:url('<?php echo get_theme_mod('slide_img3_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-3-full-new.jpg'); ?>');}
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_backgrounds');