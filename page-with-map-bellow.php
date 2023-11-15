<?php /* Template name: Normal con mapa debajo */
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <div class="container"><section class="section"><div class="breadcrumbs">';get_breadcrumb(); echo '</div></section></div>
            <article class="section content-section border-section">';
                the_title('<h1 class="title">', '</h1>');
                the_content();
            echo '</article>
            <div class="container map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.086369943894!2d-96.11554512305659!3d19.147696249714542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3411c53b58da7%3A0xf3227b2ebd91c312!2sAv%20Urano%2026%2C%20Jardines%20de%20Mocambo%2C%2094294%20Boca%20del%20R%C3%ADo%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1699646025770!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>';
    get_footer();