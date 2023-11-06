<?php

function theme_pinplast_custom_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#fff;
                --color-text:#000;
                --attenuated-text:#b3b3b3;
                --attenuated-icon:#b3b3b3;
                --attenuated-line:#b3b3b3;
                --color-links:#1a66ff;
                --blue:#ffc107;
                --yellow:#ffd333;
                --link-focus:0 0 0 .1rem #ffc107;

                /* cabecera */
                --color-header:#3d464d;
                --border-color:#ebebeb;
                --menu-mobile--button__active:#999;
                --background-color--submenu:#f7f7f7;

                /* formularios */
                --background-color-input:#fff;
                --box-shadow-input-focus:0 0 0 .3rem #007bff7d;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_colors');