<?php
get_header();
echo '<main id="main">';
    include(TEMPLATEPATH . '/parts/frontpage/hero.php');
    include(TEMPLATEPATH . '/parts/frontpage/features.php');
    include(TEMPLATEPATH . '/parts/frontpage/featured-products.php');
    // include(TEMPLATEPATH . '/parts/frontpage/catalog.php');
    // include(TEMPLATEPATH . '/parts/frontpage/bestsellers.php');
    // include(TEMPLATEPATH . '/parts/frontpage/categories.php');
    // include(TEMPLATEPATH . '/parts/frontpage/arrivals.php');
    // if ( get_posts() == null ) : else: include(TEMPLATEPATH . '/parts/frontpage/blog.php'); endif;
    // include(TEMPLATEPATH . '/parts/frontpage/products.php');
echo '</main>';
get_footer();