<?php
    echo '
    <div id="menu-mobile--wrapper" class="menu-mobile--wrapper">';
        $menu_id = get_nav_menu_locations()[ 'mobile' ];
        $menu = wp_get_nav_menu_object( $menu_id );
        $items = wp_get_nav_menu_items( $menu_id );
        echo '
        <div class="name-menu--wrapper">
            <p class="name-menu"><b>' . esc_html__('Menú', 'pinplast') . '</b></p>
            <button id="close-menu-mobile" onclick="closeMenuMobile()">
            <svg width="20px" height="20px">
                <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cross-20"></use>
            </svg>
            </button>
        </div>';
        wp_nav_menu(
            array(
                'container' => 'nav',
                'container_id' => 'menu-mobile',
                'container_class' => 'menu-mobile', 
                'theme_location' => 'mobile',
            ) 
        );
    echo '
    </div>';