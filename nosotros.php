<?php /* Template name: Nosotros */
get_header();
echo '<main id="main">
    <div class="container about-us__image"></div>
    <div class="container">
        <section class="section padding-section">'.
            the_title('<h2 class="title">', '</h2>').
            the_content();
        '</section>
    </div>
</main>';
get_footer();
