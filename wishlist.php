<?php /* Template name: Lista de deseos */
    get_header();
    
    echo 
    '<main id="main">
        <section class="container">
            
        </section>';
        echo 
        '<section class="container main-content">
            <div class="section padding-section product-cart">';
                echo do_shortcode('[yith_wcwl_wishlist]');
            echo 
            '</div>
        </section>
    </main>';

    get_footer();