<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( $related_products ) : ?>

    <section class="related products">

        <?php
        $heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

        if ( $heading ) :
            ?>
            <h2><?php echo esc_html( $heading ); ?></h2>
        <?php endif; ?>
        
        <?php woocommerce_product_loop_start(); ?>

            <?php foreach ( $related_products as $related_product ) : ?>

                <?php
                $post_object = get_post( $related_product->get_id() );

                setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
                ?>
                <li <?php wc_product_class( '', $related_product ); ?>>
                    <div class="card">
                        <?php
                        if ( has_post_thumbnail( $related_product->get_id() ) ) {
                            echo get_the_post_thumbnail( $related_product->get_id(), array( 200, 200 ) );
                        } else {
                            echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" loading="lazy">';
                        }
                        ?>  
                        <div class="content">
                            <a href="<?php echo esc_url( get_permalink( $related_product->get_id() ) ); ?>" class="permalink"><h3 class="title"><?php echo get_the_title( $related_product->get_id() ); ?></h3></a>
                            <?php
                            $average_rating = $related_product->get_average_rating();
                            $rating_count = $related_product->get_rating_count();
                            
                            if ( $average_rating > 0 ) :
                                ?>
                                <div class="rating">
                                    <?php echo wc_get_rating_html( $average_rating ); ?>
                                    <span class="votes-rating"><?php echo $rating_count . ' votos'; ?></span>
                                </div>
                            <?php else : ?>
                                <div class="rating">
                                    <div class="star-rating" role="img" aria-label="Valorado en 0 de 5">
                                        <?php
                                        for ( $i = 1; $i <= 5; $i++ ) {
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path></svg>';
                                        }
                                        ?>
                                    </div>
                                    <span class="votes-rating"><?php echo '0 votos'; ?></span>
                                </div>
                            <?php endif; ?> 
                            <?php echo '<div class="price">' . $related_product->get_price_html() . '</div>'; ?>
                        </div>
                        <div class="add-to-cart_add-to-wishlist--buttons">
                            <div class="buttons">
                                <?php
                                woocommerce_template_loop_add_to_cart();
                                if ( is_plugin_active( 'yith-woocommerce-wishlist/init.php' ) ) {
                                    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                                } else {
                                    // Additional buttons, if needed.
                                }
                                ?>    
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        <?php woocommerce_product_loop_end(); ?>

    </section>
<?php endif;

wp_reset_postdata();
