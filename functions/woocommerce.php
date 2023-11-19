<?php

// Anexos
// Estilos particulares para los templates
require_once(get_template_directory() . '/functions/woocommerce/woocommerce-components.php');

// mostrar el contenido del carrito con Ajax
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
	    <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
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

//Disable all woocommerce stylesheets
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function disable_wp_blocks() {
	$wstyles = array("wc-blocks-style","wc-blocks-style-active-filters","wc-blocks-style-add-to-cart-form","wc-blocks-packages-style","wc-blocks-style-all-products","wc-blocks-style-all-reviews","wc-blocks-style-attribute-filter","wc-blocks-style-breadcrumbs","wc-blocks-style-catalog-sorting","wc-blocks-style-customer-account","wc-blocks-style-featured-category","wc-blocks-style-featured-product","wc-blocks-style-mini-cart","wc-blocks-style-price-filter","wc-blocks-style-product-add-to-cart","wc-blocks-style-product-button","wc-blocks-style-product-categories","wc-blocks-style-product-image","wc-blocks-style-product-image-gallery","wc-blocks-style-product-query","wc-blocks-style-product-results-count","wc-blocks-style-product-reviews","wc-blocks-style-product-sale-badge","wc-blocks-style-product-search","wc-blocks-style-product-sku","wc-blocks-style-product-stock-indicator","wc-blocks-style-product-summary","wc-blocks-style-product-title","wc-blocks-style-rating-filter","wc-blocks-style-reviews-by-category","wc-blocks-style-reviews-by-product","wc-blocks-style-product-details","wc-blocks-style-single-product","wc-blocks-style-stock-filter","wc-blocks-style-cart","wc-blocks-style-checkout","wc-blocks-style-mini-cart-contents","classic-theme-styles-inline");
	
	foreach ($wstyles as $wstyle){
	 wp_deregister_style($wstyle);  
	}
	
	$wscripts = array("wc-blocks-middleware","wc-blocks-data-store");
	 foreach ($wscripts as $wscript){
	 wp_deregister_script($wscript);  
	}
}
add_action( "init", "disable_wp_blocks",100 );

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

// cambia el separador del breadcrumbs de woocommerce
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>';
	return $defaults;
}

function custom_wc_flex_control_nav_container() {
    echo '<div class="custom-flex-control-nav-container">';
}
add_action('woocommerce_single_product_image_thumbnail_html', 'custom_wc_flex_control_nav_container', 20);