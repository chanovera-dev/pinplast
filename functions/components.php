<?php

// Estilos para la página frontal
function frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        /* hero section */
        wp_enqueue_style( 'frontpage-styles', get_template_directory_uri() . '/assets/css/frontpage/hero.css' );
        /* slideshows */
        wp_enqueue_script( 'frontpage-slideshows', get_template_directory_uri() . '/assets/js/frontpage-slideshows.js', array(), '1.0', true );
        /* features */
        wp_enqueue_style( 'features-styles', get_template_directory_uri() . '/assets/css/frontpage/features.css' );
        /* featured products */
        wp_enqueue_style( 'lists-styles', get_template_directory_uri() . '/assets/css/frontpage/lists.css' );
        /* catalog link */
        wp_enqueue_style( 'catalog-styles', get_template_directory_uri() . '/assets/css/frontpage/catalog.css' );
        /* categories */
        wp_enqueue_style( 'categories-styles', get_template_directory_uri() . '/assets/css/frontpage/categories.css' );
        /* sections */
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'frontpage_styles' );

// Estilos para el template de la página Nosotros
function background_header_styles() {
    if ( is_page_template('page-with-background-header.php') ) {
        wp_enqueue_style( 'background-header-styles', get_template_directory_uri() . '/assets/css/background-header.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'background_header_styles' );

// componentes para las páginas de tipo 'page'
function page_styles() {
    if ( is_page() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'page-styles', get_template_directory_uri() . '/assets/css/page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

// Estilos para el template de la página Contacto
function contact_styles() {
    if ( is_page_template('contact.php') ) {
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contact.css' );
        /* forms */
        wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' );
        // habilita contact form 7 en esta plantilla
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
          }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action( 'wp_enqueue_scripts', 'contact_styles' );