<?php
    get_header();

    echo '
    <main id="main"><h2>main</h2>';
        include(TEMPLATEPATH . '/parts/frontpage/hero.php');
        include(TEMPLATEPATH . '/parts/frontpage/features.php');
        include(TEMPLATEPATH . '/parts/frontpage/featured-products.php');

        include(TEMPLATEPATH . '/parts/frontpage/catalog.php');

        include(TEMPLATEPATH . '/parts/frontpage/bestsellers.php');
        // include(TEMPLATEPATH . '/parts/frontpage/categories.php');
        include(TEMPLATEPATH . '/parts/frontpage/arrivals.php');
        include(TEMPLATEPATH . '/parts/frontpage/latest.php');
        if ( get_posts() == null ) : else: include(TEMPLATEPATH . '/parts/frontpage/blog.php'); endif;
        include(TEMPLATEPATH . '/parts/frontpage/products.php');

        echo '
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.086369943894!2d-96.11554512305659!3d19.147696249714542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3411c53b58da7%3A0xf3227b2ebd91c312!2sAv%20Urano%2026%2C%20Jardines%20de%20Mocambo%2C%2094294%20Boca%20del%20R%C3%ADo%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1699646025770!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>';

get_footer();