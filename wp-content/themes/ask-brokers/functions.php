<?php

function ask_brokers_files() {
    wp_enqueue_style('material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('main_styles', get_theme_file_uri('/public/styles/style.css'), NULL, microtime());

    wp_enqueue_script('jquery.min.js', 'https://code.jquery.com/jquery-3.3.1.min.js', NULL, false, true);
    wp_enqueue_script('popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', NULL, false, true);
    wp_enqueue_script('bootstrap.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', NULL, false, true);
    wp_enqueue_script('main_scripts', get_theme_file_uri('/public/scripts/scripts.js'), NULL, microtime() , true);
}

function add_favicon() {
    echo '<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">';
    echo '<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">';
    echo '<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">';
    echo '<link rel="manifest" href="/site.webmanifest">';
    echo '<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5ab864">';
    echo '<meta name="msapplication-TileColor" content="#5ab864">';
    echo '<meta name="theme-color" content="#ffffff">';
}

add_action('wp_enqueue_scripts', 'ask_brokers_files');
add_action('wp_head', 'add_favicon');
