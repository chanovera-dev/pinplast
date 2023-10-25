<?php
        echo '<footer id="main-footer" class="container">
            <section class="section footer-content">
                <aside>
                    <h2>'._('Contacto', 'pinplast').'</h2>
                    <p>'._('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.', 'pinplast').'</p>';
                    include(TEMPLATEPATH . '/parts/widgets/address.php');
                echo '</aside>
                <div class="menus">';
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
                <div class="newsletter">';
                    echo '<div class="title-wrapper"><h2 class="title">Newsletter</h2></div>
                        <p>'.__('Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.', 'pinplast').'</p>';
                    echo do_shortcode('[newsletter_form]');
                    echo '<div>';

                    $menu_id = get_nav_menu_locations()['social'];
                    $menu = wp_get_nav_menu_object($menu_id);
                    $items = wp_get_nav_menu_items($menu_id);

                    if (!empty($items)) {
                        echo '<p class="title">' . $menu->name . '</p>';
                        wp_nav_menu(
                            array(
                                'container' => 'nav',
                                'container_class' => 'social',
                                'theme_location' => 'social',
                            )
                        );
                    }

                    echo '</div>';
                echo '</div>';

                echo '</div>
                <div class="copyright">'.
                    '<p>©'.date("Y").__(' Pinplast', 'pinplast').' - '.__('Desarrollado y hospedado por ', 'pinplast').'<a href="https://peramanzana.com">PeraManzana</a></p>
                    <div class="payments">
                        <img src="'.get_theme_mod('payments', get_bloginfo('template_url') . '/assets/img/payments.png').'" loading="lazy">
                    </div>
                </div>
            </section>
        </footer>';
        wp_footer();
    echo '</body>
</html>';