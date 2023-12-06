<?php

// Estilos para los archivos de la tienda
function shop_styles() {
    if ( is_shop() || is_product_category() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'shop-styles', get_template_directory_uri() . '/assets/css/woocommerce/shop.css' );
        /* listas */
        wp_enqueue_style( 'lists-styles', get_template_directory_uri() . '/assets/css/frontpage/lists.css' );
        /* estilos css para la paginación */
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'shop_styles' );



// Estilos para la página de detalles de producto
add_action( 'template_redirect', 'template_redirect_action' );
function template_redirect_action() {
    if ( ! is_admin() && is_product() ) {
        add_filter( 'body_class', function ( $classes ) {
            global $post;
            $product = wc_get_product( $post->ID );
            $tipo    = $product->get_type();
            wp_enqueue_style( 'single-product-styles', get_template_directory_uri() . '/assets/css/woocommerce/single-product.css' );
            // JS de ajustes
            wp_enqueue_script( 'ajustes', get_template_directory_uri() . '/assets/js/single-product.js', '', 1, true );
            /* estilos css para los formularios */
            wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' ); 
            return array_merge( $classes, array( $tipo ) );
        } );
    }
}



// Estilos para la página cart
function cart_styles() {
    if ( is_page_template('cart.php') ) {
        wp_enqueue_style( 'cart-styles', get_template_directory_uri() . '/assets/css/woocommerce/cart.css' );
        // JS de ajustes
        wp_enqueue_script( 'ajustes-carrito', get_template_directory_uri() . '/assets/js/cart.js', '', 1, true );
    }
}
add_action( 'wp_enqueue_scripts', 'cart_styles' );



// Estilos para la página Wishlist
function wishlist_styles() {
    if ( is_page_template('wishlist-template.php') ) {
        wp_enqueue_style( 'wishlist-styles', get_template_directory_uri() . '/assets/css/woocommerce/wishlist.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wishlist_styles' );