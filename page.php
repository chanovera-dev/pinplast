<?php
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <div class="container"><section class="section breadcrumbs">';get_breadcrumb(); echo '</section></div>
            <article class="section padding-section">';
                the_title('<h1 class="title">', '</h1>');
                the_content();
            echo '</article>
        </section>
    </main>';
    get_footer();