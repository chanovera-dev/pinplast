<?php
echo '<div class="top-bar-wrapper">
    <section class="section top-bar">';
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'secondary', 
                'theme_location' => 'secondary',
            ) 
        );
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'tertiary', 
                'theme_location' => 'tertiary',
            ) 
        );
    echo '</section>
</div>';