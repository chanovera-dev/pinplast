<?php
get_header();
echo '<main id="main">';
    include(TEMPLATEPATH . '/parts/frontpage/hero.php');
    include(TEMPLATEPATH . '/parts/frontpage/features.php');
echo '</main>';
get_footer();