<?php
echo '
<div class="middle-bar-wrapper">
    <section class="section middle-bar">';
    include(TEMPLATEPATH . '/parts/header/brand.php');
    get_search_form();
    echo '
        <div id="customer-service-phone">';
            echo '
            <p>'.esc_html__('Servicio al cliente', 'pinplast').'</p>';
            echo '
            <a href="tel:'. get_theme_mod('customer_service', '2299216844') . '"><p><span class="customer-service">' . get_theme_mod('customer_service', '2299216844') . '</span></p></a>';
        echo '
        </div>
    </section>
</div>';