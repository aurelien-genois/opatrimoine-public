<?php

add_action(
    'after_setup_theme',
    'opatrimoine_initialize_theme',
);

add_action( 'wp_login', 'on_customer_login', 10, 2 );
function on_customer_login( $user_login, WP_User $user ) {
 
    // do not send email if user has already logged in once
    if (in_array('member', $user->roles)) {
        // NTH use the rooter (doesn't succeed to make it work)
        $redirection = home_url('/user/');
    } else if (in_array('administrator', $user->roles) || in_array('customer', $user->roles)) {
        $redirection = admin_url();
    }
    wp_redirect($redirection);
    exit;
}

function opatrimoine_initialize_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    // hide admin bar on front if not a admin
    if (!current_user_can('administrator') && !is_admin() && !current_user_can('customer')) {
        show_admin_bar(false);
      }
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

// add style and script files
add_action(
    'wp_enqueue_scripts',
    function() {
        wp_enqueue_style(
            'variables-style',
            get_theme_file_uri('assets/css/variables.css'),
        );
        wp_enqueue_style(
            'global-style',
            get_theme_file_uri('assets/css/style.css'), 
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

