<?php
    get_header();
    echo '<main id="main">
        <section class="container">';
            do_action( 'woocommerce_before_single_product' );
            echo
        '</section>
        <section class="container">
            <div class="section">';
                woocommerce_breadcrumb();
                echo '
            </div>
        </section>';
        echo 
        '<section class="container main-content"><div class="section padding-section product-list">';
        echo do_shortcode('[woocommerce_cart]');
        echo '</div></section></main>';
    get_footer();