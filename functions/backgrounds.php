<?php

function pinplast_theme_custom_backgrounds() {
    ?>
        <style>
            .about-us__image{background:url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}

            #slideshow .slide1 {background:url('<?php echo get_theme_mod('slide_img1_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-1-mobile.jpg'); ?>');}
            #slideshow .slide2 {background:url('<?php echo get_theme_mod('slide_img2_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-2-mobile.jpg'); ?>');}
            #slideshow .slide3 {background:url('<?php echo get_theme_mod('slide_img3_mobile', get_bloginfo('template_url') . '/assets/img/slides/slide-3-mobile.jpg'); ?>');}

            .catalog-link{background:url('<?php echo get_theme_mod('catalog_link_mobile', get_bloginfo('template_url') . '/assets/img/banners/banner-1-mobile.jpg'); ?>');}

            @media(min-width:768px){
                .catalog-link{background:url('<?php echo get_theme_mod('catalog_link_desktop', get_bloginfo('template_url') . '/assets/img/banners/banner-1.jpg'); ?>');}
            }

            @media(min-width:1024px){
                #slideshow .slide1{background:url('<?php echo get_theme_mod('slide_img1_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-1.jpg'); ?>');}
                #slideshow .slide2{background:url('<?php echo get_theme_mod('slide_img2_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-2.jpg'); ?>');}
                #slideshow .slide3{background:url('<?php echo get_theme_mod('slide_img3_desktop', get_bloginfo('template_url') . '/assets/img/slides/slide-3.jpg'); ?>');}
            }

            @media(min-width:1200px){
                #slideshow .slide1{background:url('<?php echo get_theme_mod('slide_img1_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-1-full.jpg'); ?>');}
                #slideshow .slide2{background:url('<?php echo get_theme_mod('slide_img2_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-2-full.jpg'); ?>');}
                #slideshow .slide3{background:url('<?php echo get_theme_mod('slide_img3_desktop_full', get_bloginfo('template_url') . '/assets/img/slides/slide-3-full.jpg'); ?>');}
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_backgrounds');