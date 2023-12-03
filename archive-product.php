<?php
    get_header();

    echo '
    <main id="main">';
        if ( have_posts() ){
            echo '
            <div class="container">';
                do_action( 'woocommerce_before_single_product' );
            echo'
            </div>
        <div class="container">
            <section class="section">';
                woocommerce_breadcrumb();
                echo '
            </section>
        </div>';
        echo '
        <div class="container main-content">
            <ul class="section product-list">';
                while( have_posts() ){         
                    the_post();
                    get_template_part( 'templates/content', 'products' );          
                }
            echo '
            </ul>';
            echo '
            <section class="section">';
                the_posts_pagination();
            echo '
            </section>';
            
        } else {
            echo '<section class="container"><div class="section"><p>' . esc_html__('Actualmente no hay artículos en esta tienda', 'pinplast') . '</p></div>';
        }
        
        echo '
        </div>
    </main>';

    get_footer();