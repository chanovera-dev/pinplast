<?php

// Agrega soporte para woocommerce
function soporte_woocommerce(){ add_theme_support( 'woocommerce' ); }
add_action( 'after_setup_theme', 'soporte_woocommerce' );



add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



//Disable all woocommerce stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_false' );



// Anexos
// Estilos particulares para los templates
require_once(get_template_directory() . '/functions/woocommerce/woocommerce-components.php');



// Crea una lista de las categorías y subcategorías de woocommerce
function obtener_categorias_woocommerce() {
    $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'show_count'   => 0,
        'pad_counts'   => 0,
        'hierarchical' => 1,
        'title_li'     => '',
        'hide_empty'   => 0,
    );

    $categorias = get_categories($args);

    if (!empty($categorias)) {
        echo '<ul>';
        foreach ($categorias as $categoria) {
            $categoria_link = get_term_link($categoria->term_id, 'product_cat');
            echo '<li><a href="' . esc_url($categoria_link) . '">' . $categoria->name . '</a>';

            // Obtener subcategorías de la categoría actual
            $subcategorias = get_terms('product_cat', array(
                'parent'     => $categoria->term_id,
                'hide_empty' => false,
            ));

            if (!empty($subcategorias)) {
                echo '<ul>';
                foreach ($subcategorias as $subcategoria) {
                    $subcategoria_link = get_term_link($subcategoria->term_id, 'product_cat');
                    echo '<li><a href="' . esc_url($subcategoria_link) . '">' . $subcategoria->name . '</a></li>';
                }
                echo '</ul>';
            }

            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No hay categorías disponibles.';
    }
}



// cambia el separador del breadcrumbs de woocommerce
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '
            <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-6x9"></use>
            </svg>';
	return $defaults;
}



// Reemplaza los números de las valoraciones por iconos de estrellas
add_filter('woocommerce_get_star_rating_html', 'replace_star_ratings', 10, 2);
function replace_star_ratings($html, $rating) {
    $html = ""; // Erase default HTML
    for($i = 0; $i < 5; $i++) {
        $html .= $i < $rating ? '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>';
    }
    return $html;
}
function custom_wc_get_star_rating_html($html, $rating, $count = 0) {
    $html = '<p class="stars"><span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"></p>';   
    for ($i = 1; $i <= 5; $i++) {
        $html .= $i <= $rating ? '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>';
    }   
    $html .= '</span>';
    return $html;
}



// Saber la cantidad de productos vendidos
function get_total_products_sold() {
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
    );

    $products = new WP_Query($args);

    $total_sold = 0;

    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            $product_id = get_the_ID();
            $total_sold += get_post_meta($product_id, '_wc_total_sales', true);
        }
        wp_reset_postdata();
    }

    return $total_sold;
}



// saber la cantidad de 'sales'
function get_total_onsale() {
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'meta_query'     => array(
            array(
                'key'     => '_sale_price',
                'value'   => 0,
                'compare' => '>',
                'type'    => 'NUMERIC',
            ),
        ),
    );

    $products = new WP_Query($args);

    $total_sold = 0;

    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            $product_id = get_the_ID();
            $total_sold += get_post_meta($product_id, '_wc_total_sales', true);
        }
        wp_reset_postdata();
    }

    return $total_sold;
}


// mostrar el carrito en tiempo real
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

    echo '
	<a class="counter cart-customlocation" href="'; echo esc_url(wc_get_cart_url()); echo '">
        <svg width="20px" height="20px">
            <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cart-20"></use>
        </svg>
        <div class="wrapper"><span class="number">'; echo sprintf ( WC()->cart->get_cart_contents_count() );  echo'</span></div>
    </a>';
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}



// Sube de lugar product_meta
function subir_metadatos() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 20);
}
add_action('init', 'subir_metadatos');



// Mueve el precio debajo
function mover_precio_debajo() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 21);
}
add_action('init', 'mover_precio_debajo');



/* Actualizar de manera asincrona los importes de carrito al cambiar cantidades */
/*
add_action( 'wp_footer', 'dlanau_actualizar_importe_carrito_' );
function dlanau_actualizar_importe_carrito_() {
if (is_cart()) :
?>
<script>
jQuery('div.woocommerce').on('change', '.qty', function(){
jQuery("[name='update_cart']").prop("disabled", false);
jQuery("[name='update_cart']").trigger("click"); 
});
</script>
<?php
endif;
} */