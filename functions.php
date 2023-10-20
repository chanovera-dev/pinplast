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
    //
    /* estilos css para los formularios */
    wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' ); 
}
add_action( 'get_footer', 'load_parts_footer' );

// permite cargar archivos SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');

// Anexo para establecer contenido discriminando el tamaño de la pantalla
//require_once(get_template_directory() . '/functions/responsive.php');

// Registro de menús
register_nav_menus( 
    array(
        'mobile' => __( 'Mobile', 'pinplast' ),
        'primary' => __( 'Primary', 'pinplast' ),
        'secondary' => __( 'Secondary', 'pinplast' ),
        'social' => __( 'Social', 'pinplast' ), 
    ) 
);

// Anexo para establecer las variables de los breakoints
require_once(get_template_directory() . '/functions/colors.php');

// Anexo para establecer las variables de los colores
require_once(get_template_directory() . '/functions/breakpoints.php');

// Anexo para establecer los componentes de los templates
require_once(get_template_directory() . '/functions/components.php');

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

// Delimita el tamaño del excerpt 
function limite_excerpt($limite) { return 25; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// salida de wp_archive_list() personalizada
function custom_archives_link($link_html, $url, $text, $format, $before, $after) {
    // Modify the $link_html to customize the link structure
    $custom_link = '<li><a href="' . esc_url($url) . '">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
    </svg>
    ' . $text . '</a></li>';
    // Return the modified link HTML
    return $before . $custom_link . $after;
}
add_filter('get_archives_link', 'custom_archives_link', 10, 6);

// Cambia la fecha a fecha relativa
add_filter( 'get_the_date', 'time_ago_text', 10, 3 );
function time_ago_text($date, $format, $post) {
	$post_date = str_contains( current_filter(), 'modified' ) ?
        strtotime( $post->post_modified ) :
        strtotime( $post->post_date );
	if ( (time() - YEAR_IN_SECONDS ) > $post_date || date(DATE_W3C, $post_date) === $date ){
		return $date;
	}
	return sprintf( 'Publicado hace %s.', human_time_diff($post_date, current_time( 'U' ) ) );
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

// deshabilita woocommerce en todas las páginas excepto en páginas de woocommerce
add_action( 'wp_enqueue_scripts', 'disable_woocommerce_loading_css_js' );
function disable_woocommerce_loading_css_js() {
    // Check if WooCommerce plugin is active
    if( function_exists( 'is_woocommerce' ) ){
        // Check if it's any of WooCommerce page
        if(! is_woocommerce() && ! is_cart() && ! is_checkout() ) {         
            
            ## Dequeue WooCommerce styles
            wp_dequeue_style('woocommerce-layout'); 
            wp_dequeue_style('woocommerce-general'); 
            wp_dequeue_style('woocommerce-smallscreen');     
            ## Dequeue WooCommerce scripts
            wp_dequeue_script('wc-cart-fragments');
            wp_dequeue_script('woocommerce'); 
            wp_dequeue_script('wc-add-to-cart'); 
        
            wp_deregister_script( 'js-cookie' );
            wp_dequeue_script( 'js-cookie' );
        }
    }    
}

// activa woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}