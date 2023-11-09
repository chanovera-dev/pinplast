<?php

function theme_pinplast_custom_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#fff;
                --color-text:#000;
                --attenuated-text:#b3b3b3;
                --attenuated-icon:#b3b3b3;
                --attenuated-line:#ebebeb;
                --color-links:#1a66ff;
                --blue:#ffc107;
                --yellow:#ffd333;
                --green:#28a745;
                --link-focus:0 0 0 .1rem #ffc107;

                /* cabecera */
                --color-header:#3d464d;
                --border-color:#ebebeb;
                --menu-mobile--button__active:#999;
                --background-color--submenu:#f7f7f7;
                    /* top-bar */
                    --color-top-bar-text:#737373;

                /* listas de productos */
                --border-product:#f0f0f0;

                /* formularios */
                --background-color-input:#fff;
                --box-shadow-input-focus:0 0 0 .3rem #007bff7d;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_colors');