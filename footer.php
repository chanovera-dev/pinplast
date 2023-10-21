<?php
        echo '<footer id="main-footer" class="container">
            <section class="section">
                <aside>
                    <h2>'._('Contacto', 'pinplast').'</h2>
                    <p>'._('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.', 'pinplast').'</p>';
                    include(TEMPLATEPATH . '/parts/widgets/address.php');
                echo '</aside>
                <div>';
                    echo '<div>';
                        $menu_id = get_nav_menu_locations()[ 'footer1' ];
                        $menu = wp_get_nav_menu_object( $menu_id );
                        $items = wp_get_nav_menu_items( $menu_id );
                        echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                        wp_nav_menu(
                            array(
                                'container' => 'nav', 
                                'container_class' => 'footer1', 
                                'theme_location' => 'footer1',
                            ) 
                        ); 
                    echo '</div>';
                    echo '<div>';
                        $menu_id = get_nav_menu_locations()[ 'footer2' ];
                        $menu = wp_get_nav_menu_object( $menu_id );
                        $items = wp_get_nav_menu_items( $menu_id );
                        echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                        wp_nav_menu(
                            array(
                                'container' => 'nav', 
                                'container_class' => 'footer2', 
                                'theme_location' => 'footer2',
                            ) 
                        ); 
                    echo '</div>';
                echo '</div>
                <div></div>
                <div></div>
                <div></div>
            </section>
        </footer>';
        wp_footer();
    echo '</body>
</html>';