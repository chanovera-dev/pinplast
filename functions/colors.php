<?php

function theme_pinplast_custom_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#fff;
                --color-text:#000;
                --color-links:#1a66ff;
                --color-header:#3d464d;
                --link-focus:0 0 0 .1rem #ffc107;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_colors');