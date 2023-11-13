<?php
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <div class="container"><section class="section"><div class="breadcrumbs">';get_breadcrumb(); echo '</div></section></div>
            <article class="section content-section border-section">';
                the_title('<h1 class="title">', '</h1>');
                the_content();
            echo '</article>
        </section>
    </main>';
    get_footer();