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
                <?php 
                    defined( 'ABSPATH' ) || exit;

                    // Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
                    if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                        return;
                    }
                    
                    global $product;
                    
                    $attachment_ids = $product->get_gallery_image_ids();
                    
                    if ( $attachment_ids && $product->get_image_id() ) {
                        foreach ( $attachment_ids as $attachment_id ) {
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                        }
                    }
                ?>
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