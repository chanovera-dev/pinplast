<div class="main-content">
    <section class="container">
        <?php do_action( 'woocommerce_before_single_product' ); ?>
    </section>
    <section class="container">
        <div class="section">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    </section>
    <section class="container container-data-product">
        <div class="section padding-section data-product">
            <div class="product-gallery">
                <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
            </div>
            <div class="product-summary">
                <?php 
                    do_action( 'woocommerce_single_product_summary' );
                ?>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="section wc-tabs_wrapper padding-section">
            <?php do_action( 'woocommerce_after_single_product_summary' );
                do_action( 'woocommerce_after_main_content' );
            ?>
        </div>
    </section>
</div>