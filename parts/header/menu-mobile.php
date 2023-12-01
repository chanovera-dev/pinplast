<?php
    echo '
    <div id="mobile-container" class="mobile-container">';
        $menu_id = get_nav_menu_locations()[ 'mobile' ];
        $menu = wp_get_nav_menu_object( $menu_id );
        $items = wp_get_nav_menu_items( $menu_id );
        echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
        wp_nav_menu(
            array(
                'container' => 'nav',
                'container_id' => 'menu-mobile--wrapper',
                'container_class' => 'menu-mobile--wrapper', 
                'theme_location' => 'mobile',
            ) 
        );
    echo '
    </div>';