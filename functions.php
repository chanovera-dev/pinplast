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
    wp_enqueue_script( 'attachments-scripts', get_template_directory_uri() . '/assets/js/attachments.js', array(), '1.0', true );
    // JS que permite llamar iconos embebidos
    wp_enqueue_script('svg4everybody', get_template_directory_uri() . '/assets/js/svg4everybody.min.js', array(), '1.0', true);
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



// Anexo para establecer los breakpoints
require_once(get_template_directory() . '/functions/breakpoints.php');
// Anexo para definir el contador de la lista de deseos
require_once(get_template_directory() . '/functions/wishlist.php');
// Anexo para establecer iconos
require_once(get_template_directory() . '/functions/icons.php');
// Anexo para definir los componentes personalizados en las plantillas
require_once(get_template_directory() . '/functions/components.php');
// anexo para activar woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}




/* activa las migas de pan (breadcrumb) */
function get_breadcrumb() {

    echo '
    <a href="'.home_url().'" rel="nofollow">'.
        esc_html__('Inicio', 'renata').'
    </a>';

    if (is_home()) {
        echo '
        <svg class="breadcrumb-arrow" width="6px" height="9px">
            <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
        </svg>
        <p>'.esc_html__('Blog', 'pinplast').'</p>';

    } elseif (is_category() || is_single()) {
        echo "";
        
            if (is_single()) {
                echo "";
                
            }
    } elseif (is_page()) {
        echo '
        <svg class="breadcrumb-arrow" width="6px" height="9px">
            <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
        </svg>'; 
        the_title('<p>', '</p>');
    } elseif (is_search()) {
        echo '
        <svg class="breadcrumb-arrow" width="6px" height="9px">
            <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
        </svg>
        <p>'.esc_html__('Resultados de búsqueda para: ', 'pinplast').'</p>';
    }
}



// Delimita el tamaño del excerpt a 25 palabras
function limite_excerpt($limite) { return 20; }
add_filter ('excerpt_length', 'limite_excerpt', 999);



// Función para agregar iconos SVG a los enlaces de "Anterior" y "Siguiente"
function custom_pagination_icons() {
    // Define los iconos SVG que deseas usar
    $previous_icon = '
                    <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                        <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-left-8x13"></use>
                    </svg>';
    $next_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path d="M6.646 8l-4-4a.5.5 0 0 1 0-.708a.5.5 0 0 1 .708 0L7.707 8l-5.354 5.354a.5.5 0 0 1-.708 0a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z"/></svg>';

    // Obtiene los enlaces de paginación y reemplaza el texto por los iconos SVG
    $pagination = paginate_links(array(
        'prev_text' => $previous_icon,
        'next_text' => $next_icon,
    ));

    // Muestra la paginación
    echo $pagination;
}