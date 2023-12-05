<?php /* Template name: Simple page alt 1 */
    get_header();

    echo '
    <main id="main">
        <div class="container main-content">
            <section class="section">
                <div class="breadcrumbs">';get_breadcrumb(); echo '</div>
            </section>
            <article class="section content border-section">';
                the_title('<h1 class="title">', '</h1>');
                the_content();
            echo '</article>
        </div>
    </main>';

    get_footer();