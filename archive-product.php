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
            <section class="section">
                <ul class="product-list">';
                    while( have_posts() ){         
                        the_post();
                        get_template_part( 'templates/content', 'products' );          
                    }
                echo '
                </ul>
            </section>
        </div>
        <div class="container">
            <section class="section">
                <div class="woocommerce-pagination">
                    <div class="page-numbers">';
                        global $wp_query;

                        // Obtiene la página actual y el total de páginas
                        $current_page = max(1, get_query_var('paged'));
                        $total_pages = $wp_query->max_num_pages;

                        // Muestra el botón de retroceso solo en la primera página
                        if ($current_page === 1) {
                            echo '
                            <a class="prev page-numbers disabled" href="#">
                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                    <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-left-8x13"></use>
                                </svg>
                            </a>';
                        }

                        custom_pagination();

                        // Muestra el botón de avance solo en la última página
                        if ($current_page === $total_pages) {
                            echo '
                            <a class="next page-numbers disabled" href="#">
                                <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                    <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-right-8x13"></use>
                                </svg>
                            </a>';
                        }
                    echo '
                    </div>
                </div>
            </section>
        </div>';
        } else {
            echo '
            <div class="container">
                <section class="section">
                    <p>' . esc_html__('Actualmente no hay artículos en esta tienda', 'pinplast') . '</p>
                </section>
            </div>';
        }
        
    echo '    
    </main>';

    get_footer();