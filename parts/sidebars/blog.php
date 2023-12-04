<aside>
    <div class="about-blog widget">
        <h2><?php echo esc_html__('Acerca del blog', 'pinplast'); ?></h2>
        <p><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.', 'pinplast'); ?></p>
        <?php
            $menu_id = get_nav_menu_locations()['social'];
            $menu = wp_get_nav_menu_object($menu_id);
            $items = wp_get_nav_menu_items($menu_id);

            if (!empty($items)) {
                wp_nav_menu(
                    array(
                        'container' => 'nav',
                        'container_class' => 'social',
                        'theme_location' => 'social',
                    )
                );
            }
        ?>
    </div>
    <div class="tags widget">
    <?php echo get_the_tag_list(); ?>
</div>
</aside>