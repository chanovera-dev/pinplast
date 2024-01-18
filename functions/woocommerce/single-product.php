<?php

// contenedor para el single product · apertura
function contenedor_antes_single_product() {
    echo '<div class="container summary"><section class="section">';
}
add_action('woocommerce_before_single_product', 'contenedor_antes_single_product', 12);
// contenedor para el single product · cierre
function contenedor_despues_single_product() {
    echo '</section></div>';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_despues_single_product', 8);



// desregistrar el precio del producto
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
// registrar el precio del producto en la posición 11
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 21);



// contenedor para las pestañas del single product · apertura
function contenedor_antes_pestanas_single_product() {
    echo '<div class="container tabs"><section class="section">';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_antes_pestanas_single_product', 9);
// contenedor para las pestañas del single product · cierre
function contenedor_despues_pestanas_single_product() {
    echo '</section></div>';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_despues_pestanas_single_product', 18);



// contenedor para los productos relacionados del single product · apertura
function contenedor_antes_productos_relacionados_single_product() {
    echo '<div class="container related products"><section class="section">';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_antes_productos_relacionados_single_product', 19);
// contenedor para los productos relacionados del single product · cierre
function contenedor_despues_productos_relacionados_single_product() {
    echo '</section></div>';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_despues_productos_relacionados_single_product', 21);



// Cantidad de productos relacionados en single product
function woo_related_products_limit() {
    global $product;
    
    $args['posts_per_page'] = 6;
    return $args;
    }
    add_filter( 'woocommerce_output_related_products_args', 'pinplast_related_products_args', 20 );
    function pinplast_related_products_args( $args ) {
    $args['posts_per_page'] = 5; 
    $args['columns'] = 1;
    return $args;
}



// contenedor para los botones de añadir carrito y añadir a la wishlist · apertura
function contenedor_antes_carrito() {
    echo '<div class="cart-wishlist--wrapper">';
}
add_action('woocommerce_single_product_summary', 'contenedor_antes_carrito', 29);
// contenedor para los botones de añadir carrito y añadir a la wishlist · cierre
function contenedor_despues_carrito() {
    echo '</div>';
}
add_action('woocommerce_single_product_summary', 'contenedor_despues_carrito', 32);



// Quitar el rango de precios de los productos variables en woocommerce
 
function precio_desde( $price, $product ) {
    // Precio normal
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
 
    // Precio rebajado
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
 
    if ( $price !== $saleprice ) {
        $price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
    }
   
    return $price;
}
 
add_filter( 'woocommerce_variable_sale_price_html', 'precio_desde', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'precio_desde', 10, 2 );