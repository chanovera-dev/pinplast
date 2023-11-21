<?php
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <article class="section content-section border-section">
                <h1>¡Oops! Error 404</h1>
                <h2>Página no encontrada</h2>
                <p>No encontramos la página que busca.
                Intente utilizar la búsqueda.</p>';
                get_search_form();
                echo '<p>O vaya a inicio para empezar de nuevo.</p>
                <a href="' . get_home_url() . '">Ir a inicio</a>';
            echo '</article>
        </section>
    </main>';
    get_footer();