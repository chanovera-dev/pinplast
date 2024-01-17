<?php

// Estilos para los archivos de la tienda
function shop_styles() {
    if ( is_shop() || is_product_category() || is_tax(get_object_taxonomies( 'product' )) ) {
        // JS de ajustes
        wp_enqueue_script( 'shop', get_template_directory_uri() . '/assets/js/shop.js', '', 1, true );
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'shop-styles', get_template_directory_uri() . '/assets/css/woocommerce/shop.css' );
        /* listas */
        wp_enqueue_style( 'lists-styles', get_template_directory_uri() . '/assets/css/woocommerce/lists.css' );
        /* estilos css para la paginación */
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );



        // agrega los botones de visualizaciones de woocommerce
        add_action('woocommerce_before_main_content', 'sidebar_buttons', 24);
        function sidebar_buttons() {
        echo '
            <button onclick="openSidebar()">
                <svg class="filters-button__icon" width="16px" height="16px">
                    <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#filters-16"></use>
                </svg>' . 
                esc_html__('Filtros', 'pinplast') . '
            </button>';
        }



        // unhook the WooCommerce wrappers
        remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
        remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
        // crea contenedores para envolver antes de el breadcrumbs hasta después de la sidebar
        add_action('woocommerce_before_main_content', 'pinplast_wrapper_start', 10);
        add_action('woocommerce_sidebar', 'pinplast_wrapper_end', 10);
        // antes del breadcrumb
        function pinplast_wrapper_start() {
            echo '<main id="main"><div class="container"><section class="section">';
        }
        // después de la sidebar original, termina en posición 10
        function pinplast_wrapper_end() {
            echo '</section></div></main>';
        }



        // abre un contenedor para la sidebar
        add_action('woocommerce_before_main_content', 'sidebar_container_start', 21);
        function sidebar_container_start() {
            echo '<aside id="sidebar-woocommerce--desktop">';
        }
        // cierra el contenedor de la sidebar
        add_action('woocommerce_before_main_content', 'sidebar_container_end', 23);
        function sidebar_container_end() {
            echo '</aside>';
        }
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
            /* listas */
            wp_enqueue_style( 'lists-styles', get_template_directory_uri() . '/assets/css/woocommerce/lists.css' );
            // JS de ajustes
            wp_enqueue_script( 'ajustes', get_template_directory_uri() . '/assets/js/single-product.js', '', 1, true );
            /* estilos css para los formularios */
            wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' ); 
            return array_merge( $classes, array( $tipo ) );
        } );



        // unhook the WooCommerce wrappers
        remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
        remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
        // crea contenedores para envolver antes de el breadcrumbs hasta después de la sidebar
        add_action('woocommerce_before_main_content', 'pinplast_wrapper_start', 10);
        add_action('woocommerce_sidebar', 'pinplast_wrapper_end', 10);

        // antes del breadcrumb
        function pinplast_wrapper_start() {
            echo '<main id="main">';
        }
        // después de la sidebar original, termina en posición 10
        function pinplast_wrapper_end() {
            echo '</main>';
        }

        // contenedor para el breadcrumb · apertura
        function contenedor_antes_breadcrumbs() {
            echo '<div class="container"><section class="section">';
        }
        add_action('woocommerce_before_main_content', 'contenedor_antes_breadcrumbs', 19);
        // contenedor para el breadcrumb · cierre
        function contenedor_despues_breadcrumbs() {
            echo '</section></div>';
        }
        add_action('woocommerce_before_main_content', 'contenedor_despues_breadcrumbs', 21);

        // contenedor para las notificaciones · apertura
        function contenedor_antes_notificaciones() {
            echo '<div class="container notices"><section class="section">';
        }
        add_action('woocommerce_before_single_product', 'contenedor_antes_notificaciones', 5);
        // contenedor para las notificaciones · cierre
        function contenedor_despues_notificaciones() {
            echo '</section></div>';
        }
        add_action('woocommerce_before_single_product', 'contenedor_despues_notificaciones', 11);
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



// Estilos para la página checkout
function checkout_styles() {
    if ( is_page_template('checkout.php') ) {
        wp_enqueue_style( 'checkout-styles', get_template_directory_uri() . '/assets/css/woocommerce/checkout.css' );
        /* estilos css para los formularios */
        wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'checkout_styles' );