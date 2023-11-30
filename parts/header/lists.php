<?php
echo '<ul class="lists">';
    if (is_plugin_active('yith-woocommerce-wishlist/init.php')) {
        echo 
        '<li>'.
            do_shortcode('[yith_wcwl_items_count]').
        '</li>';
    } else {}
    
    echo '<li>
    <svg width="20px" height="20px">
        <use xlink:href="assets/themes/stroyka/images/sprite.svg#cart-20"></use>
    </svg>
        <a class="counter" href="'; echo wc_get_cart_url(); echo '" title="'; _e( 'View your shopping cart' ); echo '">'; echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); echo '</a>
    </li>';
echo '</ul>';