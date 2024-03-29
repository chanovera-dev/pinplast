<?php
        echo '
        <footer id="main-footer">
            <div class="container footer-widgets--wrapper">
                <aside class="section footer-widgets">

                    <div class="contact">
                        <h2>'.esc_html__('Contacto', 'pinplast').'</h2>';
                        include(TEMPLATEPATH . '/parts/widgets/address.php');
                    echo '
                    </div>

                    <div class="menus">
                        <div>';
                            $menu_id = get_nav_menu_locations()[ 'information' ];
                            $menu = wp_get_nav_menu_object( $menu_id );
                            $items = wp_get_nav_menu_items( $menu_id );
                            if (!empty($items)) {
                                echo '
                                <h2>' . $menu->name . '</h2>';
                                wp_nav_menu(
                                    array(
                                        'container' => 'nav', 
                                        'container_class' => 'information', 
                                        'theme_location' => 'information',
                                    ) 
                                ); 
                            }
                        echo '
                        </div>
                        <div>';
                            $menu_id = get_nav_menu_locations()[ 'most-viewed' ];
                            $menu = wp_get_nav_menu_object( $menu_id );
                            $items = wp_get_nav_menu_items( $menu_id );
                            if (!empty($items)) {
                                echo '
                                <h2>' . $menu->name . '</h2>';
                                wp_nav_menu(
                                    array(
                                        'container' => 'nav', 
                                        'container_class' => 'most-viewed', 
                                        'theme_location' => 'most-viewed',
                                    ) 
                                ); 
                            }
                            
                        echo '
                        </div>
                    </div>

                    <div class="newsletter">
                        <h2>Boletín de noticias</h2>
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
                    
                </aside>
            </div>

            <div class="container">
                <section class="section copyright">
                    <div class="payments">
                        <img src="'.get_theme_mod('payments', get_bloginfo('template_url') . '/assets/img/payments.png').'" loading="lazy">
                    </div>
                    <p>©'.date("Y").esc_html__(' Pinplast', 'pinplast').' - '.esc_html__('Desarrollado y hospedado por ', 'pinplast').'<a href="https://peramanzana.com">PeraManzana</a></p>   
                </section>
            </div>
            
        </footer>';
        wp_footer();
    echo '
    </body>
</html>';