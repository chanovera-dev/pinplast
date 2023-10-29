<section id="featured-products" class="container main-content">
    <div class="section padding-section featured-products-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Productos destacados', 'pinplast'); ?></h2></div>
    </div>
    <div class="section featured-products-list">
    <?php
        // Get featured products
        // $args = array(
        //     'post_type'      => 'product',
        //     'posts_per_page' => 10,
        //     'meta_key'       => '_featured',
        //     'meta_value'     => 'yes',
        // );
        global $wpdb;
        $featured_products = $wpdb->get_results(
            "SELECT post_id
            FROM {$wpdb->prefix}postmeta
            WHERE meta_key = '_featured'
            AND meta_value = 'yes'"
        );

        //$featured_products = wc_get_products($args);

        // Display featured products
        if (!empty($featured_products)) {
            foreach ($featured_products as $product) {
                echo '<a href="' . esc_url(get_permalink($product->get_id())) . '">';
                echo '<h2>' . esc_html($product->get_name()) . '</h2>';
                echo '<p>' . esc_html($product->get_price_html()) . '</p>';
                echo '</a>';
            }
        } else {
            echo 'No featured products found.';
        }
        ?>
    </div>
</section>