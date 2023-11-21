<?php /* Template name: Carrito */
    get_header();
    
    echo 
    '<main id="main">
        <section class="container">
            <div class="section">';
                woocommerce_breadcrumb();
                echo '
            </div>
        </section>';
        echo 
        '<section class="container main-content">
            <div class="section padding-section product-cart">';
                echo do_shortcode('[woocommerce_cart]');
            echo 
            '</div>
        </section>
    </main>';

    get_footer();