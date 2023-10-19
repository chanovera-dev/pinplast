<?php

$post_count = wp_count_posts();

if ( $post_count->publish > 0 ) :

echo '<div class="categories"><div class="title-wrapper"><h3 class="title">' . __('Categorías', 'karlicius') . '</h3></div>';

    echo '<ul>';

    $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'style' => 'list',
        'show_count' => 1, // Mostrar el número de entradas en cada categoría
        'title_li' => '', // Dejar en blanco para evitar mostrar un título
    );

    $categories = get_categories($args);

    foreach ($categories as $category) {
        echo '<li>
            <a href="' . get_category_link($category->term_id) . '">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                </svg>
                ' . $category->name . '
            </a>
        </li>';
    }

echo '</ul></div>';

endif;