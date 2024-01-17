<section id="products" class="container">
    <div class="section products-section">
        <div class="top-rated-products">
            <div class="title-wrapper section"><h2 class="title"><?php echo __('Mejor calificados', 'pinplast'); ?></h2></div>
            <?php echo do_shortcode('[top_rated_products limit="3"]'); ?>
        </div>
        <div class="special-offers-products">
            <div class="title-wrapper section"><h2 class="title"><?php echo __('Ofertas especiales', 'pinplast'); ?></h2></div>
            <?php echo do_shortcode('[sale_products limit="3"]'); ?>
        </div>
        <div class="bestsellers-products">
            <div class="title-wrapper section"><h2 class="title"><?php echo __('Más vendidos', 'pinplast'); ?></h2></div>
            <?php echo do_shortcode('[best_selling_products limit="3"]'); ?>
        </div>
    </div>
</section>