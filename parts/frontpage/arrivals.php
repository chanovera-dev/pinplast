<section id="arrivals" class="container main-content">
    <div class="section padding-section arrivals-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Recién llegados', 'pinplast'); ?></h2></div>
    </div>
    <div class="section arrivals-list">
    <?php echo do_shortcode('[products limit="6" columns="6" orderby="id" order="DESC" visibility="visible"]'); ?>

    </div>
</section>