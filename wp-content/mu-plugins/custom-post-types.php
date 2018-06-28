<?php

function custom_post_types () {
    // Brokerage Post Type
    register_post_type('brokerage', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array(
            'slug' => 'broker-reviews'
        ),
        'public' => true,
        'labels' => array(
            'name' => 'Broker Reviews',
            'add_new_item' => 'Add New Brokerage',
            'edit_item' => 'Edit Brokerage',
            'all_items' => 'All Brokerages',
            'singular_name' => 'Brokerage'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    // Education Post Type
    register_post_type('education', array(
        'supports' => array('title', 'editor', 'excerpt', 'page-attributes'),
        'taxonomies' => array('category'),
        'rewrite' => array(
            'slug' => 'education'
        ),
        'public' => true,
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Education',
            'add_new_item' => 'Add New Lesson',
            'edit_item' => 'Edit Lesson',
            'all_items' => 'All Lessons',
            'singular_name' => 'Lesson'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    // Trading Intelligence Post Type
    register_post_type('trading_intelligence', array(
        'supports' => array('title'),
        'rewrite' => array(
            'slug' => 'trading-intelligence'
        ),
        'public' => true,
        'labels' => array(
            'name' => 'Trading Intelligence',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article',
            'all_items' => 'All Articles',
            'singular_name' => 'Article'
        ),
        'menu_icon' => 'dashicons-megaphone'
    ));

    // News from Europe Post Type
    register_post_type('news_from_europe', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array(
            'slug' => 'news-from-europe'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'News from Europe',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article',
            'all_items' => 'All Articles',
            'singular_name' => 'Article'
        ),
        'menu_icon' => 'dashicons-admin-site'
    ));

    // Trending News Post Type
    register_post_type('trending_news', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array(
            'slug' => 'trending-news'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Trending News',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article',
            'all_items' => 'All Articles',
            'singular_name' => 'Article'
        ),
        'menu_icon' => 'dashicons-image-filter'
    ));
}

add_action('init', 'custom_post_types');
