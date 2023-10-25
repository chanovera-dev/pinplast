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
    wp_enqueue_script( 'responsive-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
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
        'tertiary' => __( 'Tertiary', 'pinplast' ),
        'footer1' => __( 'Footer menu 1', 'pinplast' ),
        'footer2' => __( 'Footer menu 2', 'pinplast' ),
        'social' => __( 'Social', 'pinplast' ), 
    ) 
);

// Anexo para establecer las variables de los breakoints
require_once(get_template_directory() . '/functions/colors.php');

// Anexo para establecer las variables de los colores
require_once(get_template_directory() . '/functions/breakpoints.php');

// Anexo para establecer las variables de los iconos
//require_once(get_template_directory() . '/functions/icons.php');

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

// yith whishlist counter
if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_get_items_count' ) ) {
    function yith_wcwl_get_items_count() {
      ob_start();
      ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
        <a href="<?php echo esc_url( YITH_WCWL()->get_wishlist_url() ); ?>" class="counter">
          <span class="yith-wcwl-items-count">
            <?php echo esc_html( yith_wcwl_count_all_products() ); ?>
          </span>
        </a>
      <?php
      return ob_get_clean();
    }
  
    add_shortcode( 'yith_wcwl_items_count', 'yith_wcwl_get_items_count' );
  }
  
  if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_ajax_update_count' ) ) {
    function yith_wcwl_ajax_update_count() {
      wp_send_json( array(
        'count' => yith_wcwl_count_all_products()
      ) );
    }
  
    add_action( 'wp_ajax_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
    add_action( 'wp_ajax_nopriv_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
  }
  
  if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_enqueue_custom_script' ) ) {
    function yith_wcwl_enqueue_custom_script() {
      wp_add_inline_script(
        'jquery-yith-wcwl',
        "
          jQuery( function( $ ) {
            $( document ).on( 'added_to_wishlist removed_from_wishlist', function() {
              $.get( yith_wcwl_l10n.ajax_url, {
                action: 'yith_wcwl_update_wishlist_count'
              }, function( data ) {
                $('.yith-wcwl-items-count').children('i').html( data.count );
              } );
            } );
          } );
        "
      );
    }
  
    add_action( 'wp_enqueue_scripts', 'yith_wcwl_enqueue_custom_script', 20 );
  }

  /**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '&gt;';
	return $defaults;
}