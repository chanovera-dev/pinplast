<section id="bestsellers" class="container main-content">
    <div class="section padding-section bestsellers-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Más vendidos', 'pinplast'); ?></h2></div>
    </div>
    <div class="section bestsellers-list">
    <?php echo do_shortcode('[featured_products per_page="7" order_by="date" order="desc"]'); ?>

    </div>
</section>