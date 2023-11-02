<section id="arrivals" class="container main-content">
    <div class="section padding-section arrivals-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Recién llegados', 'pinplast'); ?></h2></div>
    </div>
    <ul class="section arrivals-list">
        <?php
            $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order'   => 'DESC'
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            $product_obj = wc_get_product( $loop->post->ID );
            $average_rating = $product_obj->get_average_rating();
        ?>
            <li class="card">
                <a href="<?php echo home_url( '/' ); ?>?add-to-cart=<?php echo $loop->post->ID; ?>&quantity=1" class="learn-more">
                    <?php
                        if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array(88,88));
                        else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" loading="lazy">';
                    ?>  
                    <div class="content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <?php if ( $average_rating > 0 ) : ?>
                            <div class="rating">
                                <?php echo wc_get_rating_html( $average_rating ); ?>
                            </div>
                        <?php else : ?>
                            <span class="no-rating">No hay calificaciones</span>
                        <?php endif; ?>
                        <?php echo '<span class="price">'. $product->get_price_html() .'</span>'; ?>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul>
</section>