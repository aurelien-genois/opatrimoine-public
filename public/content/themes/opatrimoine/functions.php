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
        
        wp_enqueue_script(
            'sample_script',
            get_theme_file_uri('assets/css/script.js'),
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
        }

    },
);



