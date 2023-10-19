<?php
    echo '<div id="menu-mobile" class="menu-mobile">';   
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'mobile', 
                'theme_location' => 'mobile',
            ) 
        );
    echo '</div>';