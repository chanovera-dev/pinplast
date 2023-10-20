<?php
echo '<!DOCTYPE html>
<html '; language_attributes(); echo '>
    <head>
        <meta charset="'; bloginfo( 'charset' ); echo '">
        <meta name="description" content="'; bloginfo( 'description' ); echo '">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        wp_head();
    echo '</head>
    <body id="body" '; body_class(); echo '>
        <header class="container main-header">
            <section id="responsive-header" class="section header-content">';
                include(TEMPLATEPATH . '/parts/header/menu-mobile.php');
                include(TEMPLATEPATH . '/parts/header/menu-button.php');
                include(TEMPLATEPATH . '/parts/header/brand.php');
                get_search_form();
                include(TEMPLATEPATH . '/parts/header/header-cart.php');
            echo '</section>
            <section id="desktop-header" class="header-content">';
            include(TEMPLATEPATH . '/parts/header/top-bar.php');
            echo '</section>
        </header>';