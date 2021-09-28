<?php

add_action(
    'after_setup_theme',
    'opatrimoine_initialize_theme',
);

function opatrimoine_initialize_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
};


// create a menu
$headerMenu_id = wp_create_nav_menu('header_menu');
$footerMenu_id = wp_create_nav_menu('footer_menu');
 
// NTH Set up default menu items linked to pages
// wp_update_nav_menu_item( $headerMenu_id, 0, array(
//     'menu-item-title'   =>  'Présentation',
//     'menu-item-url'     => home_url( '/presentation' ), 
//     'menu-item-status'  => 'publish'
// ) );
// wp_update_nav_menu_item( $headerMenu_id, 0, array(
//     'menu-item-title'   =>  'Infos pratiques',
//     'menu-item-url'     => home_url( '/infos-pratiques' ), 
//     'menu-item-status'  => 'publish'
// ) );



add_action(
    'wp_enqueue_scripts',
    function() {
        wp_enqueue_style(
            'global-style',
            get_theme_file_uri('assets/css/style.css'),
        );
        wp_enqueue_script(
            'sample_script',
            get_theme_file_uri('assets/css/script.js'),
            [],
            '1.0.0',
            true,
        );
    },
);


require_once 'functions/places.php';
add_action('pre_get_posts', 'place_pre_get_posts');
add_filter( 'posts_where', 'title_filter', 10, 2 );