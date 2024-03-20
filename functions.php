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
    wp_enqueue_script( 'mobile-menu-scripts', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), '1.0', true );
    // js para poner iconos indicadores a los submenús
    wp_enqueue_script( 'submenus-scripts', get_template_directory_uri() . '/assets/js/submenus.js', array(), '1.0', true );
    // caja de búsqueda
    wp_enqueue_script( 'searchform-scripts', get_template_directory_uri() . '/assets/js/searchform.js', array(), '1.0', true );
    // js de scroll
    wp_enqueue_script( 'scroll-scripts', get_template_directory_uri() . '/assets/js/scroll.js', array(), '1.0', true );
    /* js de formato de número para servicio al cliente */
    wp_enqueue_script( 'customer-service-format-number-js', get_template_directory_uri() . '/assets/js/format-number-customer-service.js', array(), '1.0', true );
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



function pinplast_theme_support(){ 
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'custom-logo', array( 
    'height' => 240,
    'width' => 240, 
    'flex-height' => true,
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    add_theme_support( 'post-formats', array(
        'aside',
        'image', 
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );
    
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
	set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails, hard crop mode
	add_image_size( 'post-image', 600, 200, true ); // Post thumbnails, hard crop mode
	add_image_size( 'slider-image', 920, 300, true ); // Post thumbnails for slider, hard crop mode

	add_theme_support('custom-background');

} 
add_action('after_setup_theme', 'pinplast_theme_support');


// A N E X O S
// establecer los breakpoints
require_once(get_template_directory() . '/functions/breakpoints.php');
// Anexo para establecer iconos
require_once(get_template_directory() . '/functions/icons.php');
// Anexo para definir los componentes personalizados en las plantillas
require_once(get_template_directory() . '/functions/templates.php');
// Anexo para definir los backgrounds en las plantillas
require_once(get_template_directory() . '/functions/backgrounds.php');
// anexo para activar woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}



// permite subir svg a wordpress
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



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
                echo '
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                    <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
                <a href="'.site_url('/blog').' rel="nofollow">'.esc_html__('Blog', 'pinplast').'</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                    <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>';
                the_title('<p>', '</p>');
                        
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
function custom_pagination() {
    // Define los iconos SVG que deseas usar
    $previous_icon = '
        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
            <use xlink:href="' . get_template_directory_uri() . '/assets/img/sprite.svg#arrow-rounded-left-8x13"></use>
        </svg>';

    $next_icon = '
        <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
            <use xlink:href="' . get_template_directory_uri() . '/assets/img/sprite.svg#arrow-rounded-right-8x13"></use>
        </svg>';

    // Obtiene los enlaces de paginación y reemplaza el texto por los iconos SVG
    $pagination = paginate_links(array(
        'prev_text' => $previous_icon,
        'next_text' => $next_icon,
    ));

    // Muestra la paginación
    echo $pagination;
}



// deshabilita contact form 7 en todas las páginas | revisar components.php para ver que páginas tienen habilitado contact form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );



// cambia el tamaño del avatar de los comentarios en wordpress
function custom_comment_avatar_size($avatar) {
    // Cambiar el tamaño del avatar a 60 píxeles (o el tamaño deseado)
    $avatar = preg_replace('/(width|height)="\d*"\s/', '', $avatar);
    $avatar = preg_replace('/style=["\'](.*?)["\']/', '', $avatar);
    $avatar = preg_replace('/src=([\'"])((?:(?!\1).)*?)\1/', 'src=$1$2$1 width="60" height="60"', $avatar);

    return $avatar;
}

// Aplicar el filtro
add_filter('get_avatar', 'custom_comment_avatar_size', 10, 1);



// cuenta el total de comentarios del post actual y crea un shortcode del mismo
function pinplast_total_comentarios() {
    // Obtener el ID de la publicación actual
    $post_id = get_the_ID();

    // Obtener el objeto de recuento de comentarios para la publicación actual
    $comments_count = wp_count_comments($post_id);

    // Verificar si hay comentarios aprobados antes de generar el mensaje
    if ($comments_count->approved > 0) {
        $message = '<div class="number-comments">' . $comments_count->approved . ' comentarios</div>';
        return $message;
    } else {
        // No devolver nada si no hay comentarios aprobados
        return '';
    }
}

add_shortcode('total_comentarios', 'pinplast_total_comentarios');



function widgets_areas(){

    register_sidebar(
        array(
            'name' => __('Blog Sidebar','kenko'),
            'id' => 'blog-sidebar',
            'description' => __('Sidebar Widget Area','pinplast'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
}
add_action( 'widgets_init', 'widgets_areas' );



add_filter('pre_get_document_title', 'cambio_404', 10);
function cambio_404($title) {
  if (is_404()) {
    return 'Pinplast';
  }
  return $title;
}