<?php /* Template name: Página de contacto */
    get_header();
    echo '<main id="main">
        <section class="container main-content">
            <div class="container map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.086369943894!2d-96.11554512305659!3d19.147696249714542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3411c53b58da7%3A0xf3227b2ebd91c312!2sAv%20Urano%2026%2C%20Jardines%20de%20Mocambo%2C%2094294%20Boca%20del%20R%C3%ADo%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1699646025770!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container">
                <section class="section">
                    <div class="breadcrumbs">';get_breadcrumb(); echo '</div>';
                    the_title('<h1 class="title">', '</h1>');
                echo '</section>
            </div>
            <div class="section form-section border-section">
                <div>
                    <h2>'.__('Nuestra dirección', 'pinplast').'</h2>
                    <ul>
                        <li>'; echo get_theme_mod('address_line1', 'Urano # 26'); echo ', '; echo get_theme_mod('address_line2', 'entre Progreso y Acapulco.'); echo '. '; echo get_theme_mod('address_line3', 'Fracc. Jardines de Mocambo.'); echo '</li>
                        <li>Correo: '; echo get_theme_mod('email_office', 'pinplast@hotmail.com'); echo '</li>
                        <li>Números telefónicos: '; echo get_theme_mod('office_phone_number1', '2299216844'); echo ', '; echo get_theme_mod('office_phone_number2', '2299222433'); echo '</li>
                    </ul>
                    <h3>'.__('Horario de servicio', 'pinplast').'</h3>
                    <ul>
                        <li>'; echo get_theme_mod('schedule1', 'Lu - Vi de 9:00 a 18:00 hrs'); echo '</li>
                        <li>'; echo get_theme_mod('schedule2', 'Sábados de 9:00 a 14:00 hrs'); echo '</li>
                    </ul>
                </div>
                <div></div>';
            echo '</div>
        </section>
    </main>';
    get_footer();