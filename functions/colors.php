<?php

function theme_pinplast_custom_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#fff;
                --color-text:#000;
                --color-links:#1a66ff;
                --link-focus:0 0 0 .1rem #ffc107;

                /* cabecera */
                --color-header:#3d464d;
                --border-color:#ebebeb;
                --menu-mobile--button__active:#999;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_colors');