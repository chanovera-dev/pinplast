<?php
get_header();
echo '<main id="main">';
    include(TEMPLATEPATH . '/parts/frontpage/hero.php');
    include(TEMPLATEPATH . '/parts/frontpage/features.php');
    include(TEMPLATEPATH . '/parts/frontpage/featured-products.php');
echo '</main>';
get_footer();