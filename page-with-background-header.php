<?php /* Template name: Contenedor reducido con background solapado por contenido */
get_header();
echo '<main id="main">
    <div class="container about-us__image"></div>
    <div class="container">
        <section class="section content-section">';
            the_title('<h1 class="title">', '</h1>');
            the_content();
        echo '</section>
    </div>
</main>';
get_footer();
