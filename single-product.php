<?php 
get_header();

echo '
<main id="main">';
    if ( have_posts() ){    
        while( have_posts() ){  
            the_post();    
            get_template_part( 'templates/content', 'product' );     
        }     
    }
echo '
</main>';

get_footer();