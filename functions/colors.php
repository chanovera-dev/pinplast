<?php

function theme_colors() {
    ?>
        <style>
            :root{
                --background-color-body:#ffffff;
                --color-body:#000;
                --link-focus:0 0 0 .1rem var(--blue);
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
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');
