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
    // Define los iconos SVG que deseas usar para "Anterior" y "Siguiente"
    $previous_icon = '
        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
            <use xlink:href="' . get_template_directory_uri() . '/assets/img/sprite.svg#arrow-rounded-left-8x13"></use>
        </svg>';

    $next_icon = '
        <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
            <use xlink:href="' . get_template_directory_uri() . '/assets/img/sprite.svg#arrow-rounded-right-8x13"></use>
        </svg>';
    // Obtiene los enlaces de paginación y personaliza la salida HTML
    $args = array(
        'prev_next' => true,
        'prev_text' => $previous_icon . '<span class="screen-reader-text">Previous</span>',
        'next_text' => $next_icon . '<span class="screen-reader-text">Next</span>',
    );

    $pagination = paginate_links($args);

    // Muestra la paginación
    echo $pagination;
}
