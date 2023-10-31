<section id="blog" class="container main-content">
    <div class="section padding-section blog-section">
        <div class="title-wrapper"><h2 class="title"><?php echo __('Últimas Noticias', 'pinplast'); ?></h2></div>
        <div class="latest-articles">
            <?php
                global $post;
                
                $last_posts = get_posts(array('posts_per_page' => 2));
                
                foreach ( $last_posts as $post ) :
                setup_postdata( $post );
            ?>
            
            <article class="article">
                <?php 
                    if ( has_post_thumbnail() == false ) :
                        echo '<img class="thumbnail" src="'.get_template_directory_uri().'/assets/img/thumbnail.webp" alt="Miniatura por defecto" loading="lazy" width="300" height="200">';
                    else:
                        echo '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
                    endif;
                ?>
                <div class="content">
                    <?php include(TEMPLATEPATH . '/parts/widgets/publicate-date.php'); ?>
                    <a class="permalink" href="<?php the_permalink() ?>" target="_blank"><?php the_title( '<h3 class="title">', '</h3>' ); ?></a>
                    
                </div>
                
            </article>
            
            <?php endforeach;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>