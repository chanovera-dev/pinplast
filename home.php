<?php
get_header();

    echo '
    <main id="main">
        <div class="container main-content">

            <section class="section content-header">
                <div class="breadcrumbs">'; get_breadcrumb(); echo '</div>
                <div class="title-wrapper">
                    <h1>'.esc_html__('Últimos artículos', 'pinplast').'</h1>
                </div>
            </section>
            
            <section class="section posts-wrapper">';
                  
                if ( have_posts() ){           
                    echo '
                    <div class="posts">';
                        

                        while( have_posts() ){            
                            the_post();  
                            get_template_part( 'templates/content', 'archive' );    
                        }
                        // echo '
                        // <div class="navigation pagination">
                        //     <div class="nav-links">';
                        //         custom_pagination();
                        //     echo '
                        //     </div>
                        // </div>
                        echo '
                        <div class="navigation pagination">
                            <div class="nav-links">';
                                global $wp_query;

                                // Obtiene la página actual y el total de páginas
                                $current_page = max(1, get_query_var('paged'));
                                $total_pages = $wp_query->max_num_pages;

                                // Muestra el botón de retroceso solo en la primera página
                                if ($current_page === 1) {
                                    echo '
                                    <a class="prev page-numbers" href="#">
                                        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-left-8x13"></use>
                                        </svg>
                                    </a>';
                                    custom_pagination();
                                } elseif ($current_page === $total_pages) {
                                    
                                    custom_pagination();   
                                    echo '<span class="icon-prev-text">Icono de next</span>';
                                }
                            echo '
                            </div>
                        </div>

                    </div>';     
                } else {
                    echo '<p>' . esc_html__('No se encontró ninguna coincidencia', 'pinplast') . '</p>';
                }

                $post_count = wp_count_posts();
                if ( $post_count->publish > 0 ) :
                    include(TEMPLATEPATH . '/parts/sidebars/blog.php');
                endif;

            echo '
            </section>
        </div>
    </main>';
    
get_footer();