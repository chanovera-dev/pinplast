<?php

function enqueue_custom_script() {
    wp_enqueue_script( 'responsive-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
    wp_localize_script('responsive-header', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
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
