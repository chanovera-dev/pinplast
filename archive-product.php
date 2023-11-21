<?php /* Template name: Tienda */
    get_header();
    echo '<main id="main">';
    if ( have_posts() ){
        echo 
        '<section class="container">';
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
        '<section class="container main-content"><div class="section padding-section archive-products">';
        while( have_posts() ){         
            the_post();
            get_template_part( 'templates/content', 'products' );          
        }
        echo '</div>';      
    } else {
        echo '<section class="container"><div class="section">' . '<p>' . __('Actualmente no hay artículos en esta tienda', 'pinplast') . '</p>' . '</div>';
    }
    echo '</section></main>';
    get_footer();