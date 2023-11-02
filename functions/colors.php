<?php

function theme_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#ffffff;
                --color-body:#000;
                --link-focus:0 0 0 .1rem var(--blue);
                --border-color:#ebebeb;
                --background-color-input:#ffffff;
                --box-shadow-input-focus:0 0 0 .3rem #007bff7d;
                --color-header:#3d464d;
                --blue: #007bff;
                --indigo: #6610f2;
                --purple: #6f42c1;
                --pink: #e83e8c;
                --red: #dc3545;
                --orange: #fd7e14;
                --yellow: #ffc107;
                --green: #28a745;
                --teal: #20c997;
                --cyan: #17a2b8;
                --white: #fff;
                --gray: #6c757d;
                --gray-dark: #343a40;
                --primary: #007bff;
                --secondary: #6c757d;
                --success: #28a745;
                --info: #17a2b8;
                --warning: #ffc107;
                --danger: #dc3545;
                --light: #f8f9fa;
                --dark: #343a40;
                
            }

            /* iconos de redes sociales */
            .social .menu li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg');}
            .social .menu li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg');}
            .social .menu li a[href*="youtube"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg');}
            .social .menu li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg');}
            .social .menu li a[href*="sites"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/google.svg');}

            /* fuentes */
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
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');