<?php
    get_header();

    echo '
    <main id="main">
        <div class="container main-content">
            <article class="section content-section">
                <h1>'.esc_html__('¡Oops! Error 404', 'pinplast').'</h1>
                <h2>'.esc_html__('Página no encontrada', 'pinplast').'</h2>
                <p>'.esc_html__('No encontramos la página que busca. Intente utilizar la búsqueda.', 'pinplast').'</p>';
                get_search_form();
                echo '<p>'.esc_html__('O vaya a inicio para empezar de nuevo.', 'pinplast').'</p>
                <a href="' . get_home_url() . '">Ir a inicio</a>';
            echo '
            </article>
        </div>
    </main>';
    
    get_footer();