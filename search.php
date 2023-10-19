<?php /* Template name: Blog */   
get_header();
echo '<main id="main">'; 

echo '<section class="container main-content"><div class="section padding-section posts-wrapper">';
                  
    if ( have_posts() ){           
        echo '<div class="posts">';
        include (TEMPLATEPATH. '/parts/sections/title-search.php');
        while( have_posts() ){            
            the_post();  
            get_template_part( 'templates/content', 'archive' );    
        }
        the_posts_pagination();
        echo '</div>';     
    } else {
        echo '<p>' . __('No se encontró ninguna coincidencia', 'pinplast') . '</p>';
    }
    $post_count = wp_count_posts();
    if ( $post_count->publish > 0 ) :
        include(TEMPLATEPATH . '/parts/sidebars/blog.php');
    endif;
echo '</div></section>';  
echo '</main>';
get_footer();