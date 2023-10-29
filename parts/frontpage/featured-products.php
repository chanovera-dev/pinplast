<section id="featured-products" class="container main-content">
    <div class="section padding-section featured-products-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Productos destacados', 'pinplast'); ?></h2></div>
    </div>
    <div class="section featured-products-list">
    <?php echo do_shortcode('[featured_products per_page="10" order_by="date" order="desc"]'); ?>

    </div>
</section>