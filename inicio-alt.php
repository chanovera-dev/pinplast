<?php /* Template name: Inicio alt */
    get_header();

    echo '
    <main id="main">';
        include(TEMPLATEPATH . '/parts/frontpage/hero-alt.php');
        echo '
    </main>';

get_footer();