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
            $product_permalink = get_permalink( $loop->post->ID );
            $product_obj = wc_get_product( $loop->post->ID );
            $rating_count = $product_obj->get_rating_count(); // Obtiene la cantidad de votos
            ?>

            <li class="card">
                <?php
                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array(88,88));
                else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" loading="lazy">';
                ?>  
                <div class="content">
                    <a href="<?php echo esc_url( $product_permalink ); ?>" class="permalink"><h3 class="title"><?php the_title(); ?></h3></a>
                    <?php if ( $rating_count > 0 ) : ?>
                    <div class="rating">
                        <span class="number-rating"><?php echo $rating_count . ' votos'; ?></span>
                    </div>
                    <?php else : ?>
                    <div class="rating">
                        <span class="number-rating">Sin votos</span>
                    </div>
                    <?php endif; ?> 
                    <?php echo '<span class="price">'. $product->get_price_html() .'</span>'; ?>
                </div>
            </li>

            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul>
</section>