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
    <body '; body_class(); echo '>
        <header class="container main-header">
            <section class="section header-content">';
            
            echo '</section>
        </header>';