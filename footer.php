<?php
        echo '
        <footer id="main-footer" class="container">
            <section class="section footer-content">
                <aside>
                    <h2>'._('Contacto', 'pinplast').'</h2>';
                    include(TEMPLATEPATH . '/parts/widgets/address.php');
                echo '
                </aside>
                <div class="menus">';
                    echo '
                    <div>';
                        $menu_id = get_nav_menu_locations()[ 'information' ];
                        $menu = wp_get_nav_menu_object( $menu_id );
                        $items = wp_get_nav_menu_items( $menu_id );
                        echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                        wp_nav_menu(
                            array(
                                'container' => 'nav', 
                                'container_class' => 'information', 
                                'theme_location' => 'information',
                            ) 
                        ); 
                    echo '
                    </div>
                    <div>';
                        $menu_id = get_nav_menu_locations()[ 'most-viewed' ];
                        $menu = wp_get_nav_menu_object( $menu_id );
                        $items = wp_get_nav_menu_items( $menu_id );
                        echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                        wp_nav_menu(
                            array(
                                'container' => 'nav', 
                                'container_class' => 'most-viewed', 
                                'theme_location' => 'most-viewed',
                            ) 
                        ); 
                    echo '
                    </div>
                </div>
                <div class="newsletter">
                    <div class="title-wrapper">
                        <h2 class="title">Boletín de noticias</h2>
                    </div>
                    <p>'.esc_html__('Suscríbete a nuestros envíos de correo y recibe promociones y ofertas exclusivas.', 'pinplast').'</p>'.
                    do_shortcode('[newsletter_form]').'
                    <div>';
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

                    echo '
                    </div>
                </div>
            </div>
                <div class="copyright">'.
                    '<p>©'.date("Y").esc_html__(' Pinplast', 'pinplast').' - '.esc_html__('Desarrollado y hospedado por ', 'pinplast').'<a href="https://peramanzana.com">PeraManzana</a></p>
                    <div class="payments">
                        <img src="'.get_theme_mod('payments', get_bloginfo('template_url') . '/assets/img/payments.png').'" loading="lazy">
                    </div>
                </div>
            </section>
        </footer>';
        wp_footer();
    echo '
    </body>
</html>';