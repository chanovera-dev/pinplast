<?php

echo '
<main id="main" class="main-content">
    <div class="container">
        <section class="section">
            <div class="breadcrumbs">'; get_breadcrumb(); echo '</div>
        </section>
    </div>
    <div class="container">
        <article class="section content-section">
            <div class="content">';
                if ( has_post_thumbnail() == false ) :
                else:
                    echo '<img src="'; the_post_thumbnail_url( 'full' ); echo '" alt="" width="730" height="490" loading="lazy">';
                endif;
                the_title('<h1>', '</h1>');
                include(TEMPLATEPATH . '/parts/widgets/publicate-date.php');
                the_content();
            echo '
            </div>';
            include(TEMPLATEPATH . '/parts/sidebars/post.php');
        echo '
        </article>
    </div>
    <div class="container comments-section-wrapper">
        <section class="section comments-section">
            <div class="comments">';
                comments_template();
            echo '
            </div>';    
        echo '
        </section>
    </div>
</main>';