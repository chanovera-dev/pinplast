<?php

echo '
<main id="main" class="main-content">
    <div class="container">
        <section class="section">
            <div class="breadcrumbs">'; get_breadcrumb(); echo '</div>
        </section>
    </div>
    <div class="container">
        <section class="section post-wrapper">
            <div>
                <article class="content">';
                    the_title('<h1>', '</h1>');
                    include(TEMPLATEPATH . '/parts/widgets/publicate-date.php');
                    if ( has_post_thumbnail() == false ) :
                    else:
                        echo '<img class="post-thumbnail" src="'; the_post_thumbnail_url( 'full' ); echo '" alt="" width="730" height="490" loading="lazy">';
                    endif;
                    the_content();
                    echo '
                </article>
                <aside>
                    <div class="tags">'.get_the_tag_list().'</div>';
                    include(TEMPLATEPATH . '/parts/widgets/related-posts.php');
                    echo '
                </aside>
            </div>';
            include(TEMPLATEPATH . '/parts/sidebars/post.php');
        echo '
        </section>
    </div>
</main>';