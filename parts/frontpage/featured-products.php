<section id="featured-products" class="container main-content">
    <div class="section padding-section featured-products-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Productos destacados', 'pinplast'); ?></h2></div>
    </div>
    <div class="section featured-products-list">
    <?php
        // Conexión a la base de datos de WordPress
        global $wpdb;

        // Obtener los últimos 10 productos destacados de WooCommerce
        $productos_destacados = $wpdb->get_results(
            "SELECT p.* 
            FROM {$wpdb->prefix}posts p
            INNER JOIN {$wpdb->prefix}postmeta pm ON p.ID = pm.post_id
            WHERE p.post_type = 'product' 
            AND p.post_status = 'publish' 
            AND pm.meta_key = '_featured' 
            AND pm.meta_value = 'yes'
            ORDER BY p.post_date DESC 
            LIMIT 10"
        );

        // Mostrar los resultados
        foreach ($productos_destacados as $producto) {
            echo '<h2>' . $producto->post_title . '</h2>';
            echo '<p>' . $producto->post_content . '</p>';
            // Puedes acceder a más información del producto utilizando $producto->ID, $producto->post_meta, etc.
        }
        ?>

    </div>
</section>