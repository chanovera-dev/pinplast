<section id="categories" class="container main-content">
    <div class="section padding-section categories-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Categorías populares', 'pinplast'); ?></h2></div>
    </div>
    <div class="section categories-list">
    <?php echo do_shortcode('[featured_products per_page="7" order_by="date" order="desc"]'); ?>

    </div>
</section>