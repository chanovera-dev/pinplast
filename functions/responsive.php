<?php

function enqueue_custom_script() {
    
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

add_action('wp_ajax_get_little_screen_content', 'get_little_screen_content');
add_action('wp_ajax_nopriv_get_little_screen_content', 'get_little_screen_content');

function get_little_screen_content() {
    ob_start();
    include(get_template_directory() . '/parts/header/little-screen.php');
    $content = ob_get_clean();
    echo $content;
    wp_die();
}

add_action('wp_ajax_get_big_screen_content', 'get_big_screen_content');
add_action('wp_ajax_nopriv_get_big_screen_content', 'get_big_screen_content');

function get_big_screen_content() {
    ob_start();
    include(get_template_directory() . '/parts/header/big-screen.php');
    $content = ob_get_clean();
    echo $content;
    wp_die();
}
