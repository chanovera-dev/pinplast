<?php
get_header();

    echo '
    <main id="main">
        <div class="container main-content">

            <section class="section content-header">
                <div class="breadcrumbs">'; get_breadcrumb(); echo '</div>
                <div class="title-wrapper">
                    <h1 class="title">'; echo the_search_query().'</h1>
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

                        the_posts_pagination();
                    echo '
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