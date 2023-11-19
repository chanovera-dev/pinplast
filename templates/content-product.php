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
                    
                    $columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
                    $post_thumbnail_id = $product->get_image_id();
                    $wrapper_classes   = apply_filters(
                        'woocommerce_single_product_image_gallery_classes',
                        array(
                            'woocommerce-product-gallery',
                            'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
                            'woocommerce-product-gallery--columns-' . absint( $columns ),
                            'images',
                        )
                    );
                    ?>
                    <div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <?php
                            if ( $post_thumbnail_id ) {
                                $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
                            } else {
                                $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
                            }
                    
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                    
                            do_action( 'woocommerce_product_thumbnails' );
                            ?>
                        </figure>
                    </div>
                
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