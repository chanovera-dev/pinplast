<?php
echo '<div class="middle-bar-wrapper">
    <section class="section middle-bar">';
    include(TEMPLATEPATH . '/parts/header/brand.php');
    get_search_form();
    echo '<div class="customer-service">';
        echo '<p>Servicio al cliente</p>';
        echo '<p><span>' . get_theme_mod('customer_service', '(229) 921-6844') . '</span></p>';
    echo '</div>
    </section>
</div>';