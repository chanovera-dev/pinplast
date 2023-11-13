<?php
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <div class="section breadcrumbs">';get_breadcrumb(); echo '</div>
            <article class="section padding-section">';
                the_title('<h1 class="title">', '</h1>');
                the_content();
            echo '</article>
        </section>
    </main>';
    get_footer();