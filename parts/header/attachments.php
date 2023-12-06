<?php
echo '<ul class="attachment-list">';
    if (is_plugin_active('yith-woocommerce-wishlist/init.php')) {
        echo 
        '<li>'.
            do_shortcode('[yith_wcwl_items_count]').
        '</li>';
    } else {}
    
    echo '<li>
        <a class="counter cart-customlocation" href="'; echo esc_url(wc_get_cart_url()); echo '" title="'; _e( 'View your shopping cart' ); echo '">
            <svg width="20px" height="20px">
                <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cart-20"></use>
            </svg>
            <div class="wrapper"><span class="number">'; echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );  echo'</span></div>
        </a>
    </li>';
echo '</ul>';