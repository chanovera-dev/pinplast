<section id="arrivals" class="container main-content">
    <div class="section padding-section arrivals-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Recién llegados', 'pinplast'); ?></h2></div>
    </div>
    <ul class="section arrival-list">
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
    ?>
        <li class="card">
            <?php
                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array(150,150));
                else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" loading="lazy">';
            ?>  
            <h3 class="title"><?php the_title(); ?></h3>
            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
            <div class="links">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" target="_blank" class="learn-more">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                <a href="<?php echo home_url( '/' ); ?>?add-to-cart=<?php echo $loop->post->ID; ?>&quantity=1" class="learn-more">
                    Buy
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
            <!--<?php echo '<span class="price"> From '. $product->get_price_html() .'</span>'; ?>-->
            
        </li>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul>
</section>