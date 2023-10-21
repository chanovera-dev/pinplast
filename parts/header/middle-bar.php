<?php
echo '<div class="middle-bar-wrapper">
    <section class="section middle-bar">';
    include(TEMPLATEPATH . '/parts/header/brand.php');
    get_search_form();
    echo '<div class="customer-service">';
        echo '<p>Customer Service</p>';
        echo get_theme_mod('phone_number', '2299216844');
    echo '</div>
    </section>
</div>';