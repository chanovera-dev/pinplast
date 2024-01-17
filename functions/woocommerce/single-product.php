<?php

// contenedor para el single product · apertura
function contenedor_antes_single_product() {
    echo '<div class="container summary"><section class="section">';
}
add_action('woocommerce_before_single_product', 'contenedor_antes_single_product', 12);
// contenedor para el single product · apertura
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
// contenedor para las pestañas del single product · apertura
function contenedor_despues_pestanas_single_product() {
    echo '</section></div>';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_despues_pestanas_single_product', 18);



// contenedor para los productos relacionados del single product · apertura
function contenedor_antes_productos_relacionados_single_product() {
    echo '<div class="container related products"><section class="section">';
}
add_action('woocommerce_after_single_product_summary', 'contenedor_antes_productos_relacionados_single_product', 19);
// contenedor para los productos relacionados del single product · apertura
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
    add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
    function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 5; 
    $args['columns'] = 1;
    return $args;
}