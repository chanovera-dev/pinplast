<?php
echo '<div class="bottom-bar-wrapper">
    <section class="section bottom-bar">';
        echo '<div></div>';
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'primary', 
                'theme_location' => 'primary',
            ) 
        );
        include(TEMPLATEPATH . '/parts/header/cart-header.php');
    echo '</section>
</div>';