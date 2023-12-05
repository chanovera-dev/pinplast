<?php
    get_header();
    
    echo '
    <main id="main">
        <div class="container main-content">
            <section class="section content-header">
                <div class="breadcrumbs">'; get_breadcrumb(); echo '</div>
                <div class="title-wrapper">';
                    the_title('<h1 class="title">', '</h1>');
                echo '
                </div>
            </section>
            <article class="section content border-section">';
                the_content();
            echo '
            </article>
        </div>
    </main>';
    get_footer();