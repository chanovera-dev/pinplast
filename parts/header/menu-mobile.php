<?php
    echo '
    <div id="mobile-container" class="mobile-container">';
        $menu_id = get_nav_menu_locations()[ 'mobile' ];
        $menu = wp_get_nav_menu_object( $menu_id );
        $items = wp_get_nav_menu_items( $menu_id );
        echo '
        <div class="title-wrapper">
            <p class="title"><b>' . $menu->name . '</b></p>
            <button id="close-menu-mobile">
            <svg width="20px" height="20px" id="close-searchbar--button">
                <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cross-20"></use>
            </svg>
            </button>
        </div>';
        wp_nav_menu(
            array(
                'container' => 'nav',
                'theme_location' => 'mobile',
            ) 
        );
    echo '
    </div>';