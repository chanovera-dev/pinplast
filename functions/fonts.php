<?php

function theme_pinplast_custom_fonts() {
    ?>
        <style>
            /* roboto-300 - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-300.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-300italic - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-300italic.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-regular - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-regular.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-italic - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-italic.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-500 - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-500.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-500italic - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-500italic.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-700 - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-700.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* roboto-700italic - latin */
            @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto/roboto-v30-latin-700italic.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
            }
            /* Stroyka */
            @font-face {
            font-family: 'stroyka';
            src:
                    url('<?php echo get_template_directory_uri(); ?>/assets/fonts/stroyka/stroyka.ttf') format('truetype'),
                    url('<?php echo get_template_directory_uri(); ?>/assets/fonts/stroyka/stroyka.woff') format('woff'),
                    url('<?php echo get_template_directory_uri(); ?>/assets/fonts/stroyka/stroyka.svg#stroyka') format('svg');
            font-weight: normal;
            font-style: normal;
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_pinplast_custom_fonts');