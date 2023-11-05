<?php
    echo '<div id="menu-mobile--wrapper" class="menu-mobile--wrapper">';   
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'mobile', 
                'theme_location' => 'mobile',
                'menu_id' => 'menu-mobile',
            ) 
        );
    echo '</div>';