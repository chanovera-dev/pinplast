<section id="blog" class="container main-content">
    <div class="title-wrapper section">
        <h2 class="title"><?php echo __('Últimos artículos', 'pinplast'); ?></h2>
        <div class="slideshow-buttons__blog">
            <button id="backward-button__blog" class="blog--button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </button>
            <button id="forward-button__blog" class="blog--button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
        </div>
    </div>
      <div class="section"> 
        <div class="blog-wrapper">
            <ul id="blog-list" class="blog-list posts-list">       
                <?php
                    global $post;
                    
                    $last_posts = get_posts(array('posts_per_page' => 4));
                    
                    foreach ( $last_posts as $post ) :
                    setup_postdata( $post );
                ?>
                
                <li class="post">
                    <?php 
                        if ( has_post_thumbnail() == false ) :
                            echo '<img class="thumbnail" src="'.get_template_directory_uri().'/assets/img/thumbnail.webp" alt="Miniatura por defecto" loading="lazy" width="300" height="200">';
                        else:
                            echo '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
                        endif;
                    ?>
                    <div class="content">
                        <a class="permalink" href="<?php the_permalink() ?>" target="_blank"><?php the_title( '<h3 class="title">', '</h3>' ); ?></a>
                        <?php include(TEMPLATEPATH . '/parts/widgets/publicate-date.php'); ?>
                        <?php the_excerpt(); ?>
                    </div>
                    
                </li>
                
                <?php endforeach;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</section>