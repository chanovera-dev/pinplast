<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {
    // Estilos globales
    wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    wp_enqueue_style( 'global' );
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes (estilos, javascript, etc) en el footer
function load_parts_footer(){
    // JS de efectos en la cabecera
    wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
    /* widgets */
    wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
}
add_action( 'get_footer', 'load_parts_footer' );

// Registro de menús
register_nav_menus( 
    array(
        'mobile' => __( 'Mobile', 'pinplast' ),
        'primary' => __( 'Primary', 'pinplast' ),
        'secondary' => __( 'Secondary', 'pinplast' ),
        'tertiary' => __( 'Tertiary', 'pinplast' ),
        'information' => __( 'Information', 'pinplast' ),
        'most-viewed' => __( 'Most viewed', 'pinplast' ),
        'social' => __( 'Social', 'pinplast' ), 
    ) 
);

// ANEXOS
// Anexo para establecer las fuentes
require_once(get_template_directory() . '/functions/fonts.php');
// Anexo para establecer los colores
require_once(get_template_directory() . '/functions/colors.php');
// Anexo para establecer iconos
require_once(get_template_directory() . '/functions/icons.php');
// Anexo para establecer los breakpoints
require_once(get_template_directory() . '/functions/breakpoints.php');
// Anexo para definir el contador de la lista de deseos
require_once(get_template_directory() . '/functions/wishlist.php');
// Anexo para definir los componentes personalizados en las plantillas
require_once(get_template_directory() . '/functions/components.php');
// Anexo para definir los backgrounds en las plantillas
require_once(get_template_directory() . '/functions/backgrounds.php');
// anexo para activar woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}

// Delimita el tamaño del excerpt 
function limite_excerpt($limite) { return 25; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// Agrega soporte para los siguientes componentes
function theme_support(){
    // Carga el título de la página en el head
    add_theme_support( 'title-tag' );
    // Permite agregar un logo personalizado al sitio
    add_theme_support( 'custom-logo' );  
    // Activa las miniaturas en los artículos en portada
    add_theme_support( 'post-thumbnails' );  
}
add_action( 'after_setup_theme', 'theme_support' );

/* activa las migas de pan (breadcrumb) */
function get_breadcrumb() {
    echo 
    '<a href="'.home_url().'" rel="nofollow">';
        
        echo __('Inicio', 'renata');
    echo '</a>';
    if (is_category() || is_single()) {
        echo "";
        
            if (is_single()) {
                echo "";
                
            }
    } elseif (is_page()) {
        echo 
            '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>'; 
      the_title('<p>', '</p>');
    } elseif (is_search()) {
        echo "";
    }
}

// desactiva polyfill
function deregister_polyfill(){
    wp_deregister_script( 'wp-polyfill' );
    wp_deregister_script( 'regenerator-runtime' );
  }
  add_action( 'wp_enqueue_scripts', 'deregister_polyfill');

// deshabilita contact form 7 en todas las páginas
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );