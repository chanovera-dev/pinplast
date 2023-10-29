<section id="featured-products" class="container main-content">
    <div class="section padding-section featured-products-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Productos destacados', 'pinplast'); ?></h2></div>
    </div>
    <div class="section featured-products-list">
    <?php
        // Conexión a la base de datos de WordPress
        global $wpdb;

        // Obtener los últimos 10 productos de WooCommerce
        $productos = $wpdb->get_results(
            "SELECT * 
            FROM {$wpdb->prefix}posts 
            WHERE post_type = 'product' 
            AND post_status = 'publish' 
            ORDER BY post_date DESC 
            LIMIT 10"
        );

        // Mostrar los resultados
        foreach ($productos as $producto) {
            echo '<h2>' . $producto->post_title . '</h2>';
            echo '<p>' . $producto->post_content . '</p>';
            // Puedes acceder a más información del producto utilizando $producto->ID, $producto->post_meta, etc.
        }
        ?>
    </div>
</section>