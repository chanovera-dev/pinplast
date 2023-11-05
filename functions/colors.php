<?php

function theme_pinplast_custom_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#fff;
                --color-body:#000;
                --color-body--links:#1a66ff;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_colors');