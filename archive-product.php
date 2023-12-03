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
                echo do_shortcode('[yith_wcan_filters slug="filtro-pinplast"]');
                while( have_posts() ){         
                    the_post();
                    get_template_part( 'templates/content', 'products' );          
                }
            echo '
            </ul>';

            
        echo '
        </div>
        <div class="container">
            <section class="section">';
                the_posts_pagination();
            echo '
            </section>
        </div>';
        } else {
            echo '<section class="container"><div class="section"><p>' . esc_html__('Actualmente no hay artículos en esta tienda', 'pinplast') . '</p></div>';
        }
        
    echo '    
    </main>';

    get_footer();