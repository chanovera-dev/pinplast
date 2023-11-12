<?php /* Template name: Nosotros */
get_header();
echo '<main id="main">
    <div class="container about-us__image"></div>
    <div class="container">
        <section class="section nosotros-section">';
            the_title('<h1 class="title">', '</h1>');
            the_content();
        echo '</section>
    </div>
</main>';
get_footer();
