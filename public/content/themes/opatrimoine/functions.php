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

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'Header Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

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
