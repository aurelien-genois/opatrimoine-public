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




// =========================================================
// IMPORTANT WP wp_enqueue_scripts, ajouter des fichiers css/js à charger dans le thème
add_action(
    'wp_enqueue_scripts',
    function() {
        // IMPORTANT WP chargement d'un fichier css
        // DOC WP wp_enqueue_style https://developer.wordpress.org/reference/functions/wp_enqueue_style/
        wp_enqueue_style(
            'global-style', // identifiant du fichier css
            // get_theme_file_uri calcul automatiquement l'url du fichier demandé
            get_theme_file_uri('assets/css/style.css'), // url du fichier css
        );

        wp_enqueue_style(
            'google-font',
            'https://fonts.googleapis.com/css2?family=Antic+Didone&family=Be+Vietnam+Pro:wght@200;400;500;600;700&display=swap'
        );

        wp_enqueue_style(
            'material-design-icon',
            'https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css'
        );
        
        wp_enqueue_style(
            'places-style',
            get_theme_file_uri('assets/css/places.css'),
        );
        wp_enqueue_script(
            'sample_script',
            get_theme_file_uri('assets/js/script.js'),
            [],
            '1.0.0',
            true,
        );
        
        // ===========================================================
        // WARNING SUPER SALE

        // si nous en développement (localhost)
        if($_SERVER['HTTP_HOST'] == 'localhost') {
            wp_enqueue_script(
                'vue-js',
                get_theme_file_uri('components/dist/js/app.js'),
                [],
                '1.0.0',
                true
            );


            wp_enqueue_style(
                'vue-js-style',
                get_theme_file_uri('components/dist/css/app.css'),
            );

        }
        //sinon nous chargeons le vrai fichier "final"
        else {
            wp_enqueue_script(
                'vue-js',
                get_theme_file_uri('assets/components/js/app.js'),
                [],
                '1.0.0',
                true
            );
            wp_enqueue_style(
                'vue-js-style',
                get_theme_file_uri('assets/components/css/app.css'),
            );
        }

    },
);

require_once 'functions/places.php';
add_action('pre_get_posts', 'place_pre_get_posts');
add_filter( 'posts_where', 'title_filter', 10, 2 );
