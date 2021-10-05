<?php

function place_pre_get_posts($query) {

    if($query->is_main_query() && !is_admin() && is_post_type_archive('place')) {
        $query->set('posts_per_page', 3);

        if(!empty($_GET)) {
            // Wordpress filters automatically because input's name is the same as taxonomy's name
            // if ($_GET['place-type'] !== "all") {
            //     $query->set('tax_query', [
            //         [
            //             'taxonomy' => 'place-type',
            //             'field' => 'slug',
            //             'terms' => $_GET['place-type'],
            //         ]
            //     ]);
            // }

            if (!empty($_GET['place-city'])) {
                $query->set('meta_query', [
                    [
                    'key' => 'city',
                    'value' => $_GET['place-city'],
                    ],
                ]);
            }
        }   
        add_filter( 'posts_where', 'title_filter', 10, 2 );  
    }
}

function title_filter( $where, $wp_query ) {
    global $wpdb;

    if(!$wp_query->is_post_type_archive('place')) {
        return;
    }

    if (!$wp_query->is_main_query()) {
        $queryArgs = isset( $_POST['query'] ) ? array_map( 'esc_attr', $_POST['query'] ) : array();
        $placeName = $queryArgs['custom_s'];
    }
    if (!empty($_GET['place-name'])) {
        $placeName = $_GET['place-name'];
    }
    if (isset($placeName))  {

        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like (( $placeName ) ) . '%\'';
    }
    return $where;
}

function getPlaceTypes() {
    $placeTypes = get_terms([
        'taxonomy' => 'place-type',
        'hide_empty' => false,
    ]);

    return $placeTypes;
}

function getCities() {

    // NTH get all france cities from an API 
    // get all place posts to get their city
    $placesPosts = get_posts(['post_type' => 'place', 'posts_per_page' => -1, 'cache_results'  => false,'update_post_term_cache' => false]);
    // get all cities from the posts
    $cities = [];
    foreach($placesPosts as $placesPost) {
        if(in_array(get_field('city', $placesPost->ID), $cities)) {
            continue; // ignore if a city already register in $cities
        }
        $cities[] = get_field('city', $placesPost->ID);
    };

    return $cities;
}

function getGuidedToursByPlaceId($placeId) {
    // not need to test if a single-place page, because the function is called only in the single-place file
    // if (! is_singular('place')){
    //     return;
    // }

    $guidedTours = get_posts([
        'posts_per_page' => -1,
        'post_type' => 'guided-tour',
        'meta_key' => 'placeoftour',
        'meta_value' => $placeId,
    ]);

    foreach($guidedTours as $guidedTour) {
        // add acf fields to the guidedTour object
        $fields = get_fields($guidedTour->ID);
        foreach($fields as $key => $value) {
            // acf relational-field placeoftour is already used above, adding it to the guided-tour post object loads the entire post object of the current place post (not only the ID) which is not necessary
            if($key !== "placeoftour") {
                $guidedTour->{$key} = $value;
            }
        }

        // add thematics array to the guidedTour object
        $thematics = get_the_terms
        ($guidedTour->ID, 'tour-thematic');
        $thematicsNames = [];
        foreach($thematics as $thematic) {
            $thematicsNames[] = $thematic->name;
        }
        $guidedTour->thematics = $thematicsNames;


        // add variable to know if the current user is a member to the guidedTour object
        $user = wp_get_current_user();
        if(!in_array('member', $user->roles)) {
            $guidedTour->isMember = true;
        } else {
            $guidedTour->isMember = false;
        }

        // add register reservation route to the guidedTour object
        global $router;
        $registerReservationUrl = $router->generate(
            'user-register-reservations-to-guided-tour',
            [
                'guidedTourId' => $guidedTour->ID,
                'memberId' => $user->ID,
            ],
        );
        $guidedTour->reservationUrl = $registerReservationUrl;
    }

    return $guidedTours;
}



// ===========================
// Infinite Scroll for places list - Click to Load More
// https://www.billerickson.net/infinite-scroll-in-wordpress
// ===========================

/**
 * Javascript for Load More
 *
 */
function be_load_more_js() {

    if (!is_post_type_archive('place')) {
        return;
    }
    $placeName = "";
    $placeType = "";
    $placeCity = "";

    if (!empty($_GET['place-name'])) {
        $placeName = $_GET['place-name'];
    };
    if (!empty($_GET['place-city'])) {
        $placeCity = $_GET['place-city'];
    };
    if (!empty($_GET['place-type'])) {
        $placeType = $_GET['place-type'];
    };

    // on peut fusionner $wp_query->query
    $query = [
        "post_type" => "place",
        "place-type" => $placeType,
        'meta_key' => 'city',
        'meta_value' => $placeCity,
        'custom_s' => $placeName, // for the title_filter
        'posts_per_page' => 3,
    ];
    $args = array(
        'url'   => admin_url( 'admin-ajax.php' ),
        'query' => $query,
    );

    wp_enqueue_script( 'be-load-more', get_stylesheet_directory_uri() . '/assets/js/load-more.js', array( 'jquery' ), '1.0', true );
    wp_localize_script( 'be-load-more', 'beloadmore', $args );
}
add_action( 'wp_enqueue_scripts', 'be_load_more_js' );

/**
 * AJAX Load More 
 *
 */
function be_ajax_load_more() {

    $args = isset( $_POST['query'] ) ? array_map( 'esc_attr', $_POST['query'] ) : array();
    $args['post_type'] = isset( $args['post_type'] ) ? esc_attr( $args['post_type'] ) : 'post';
    $args['paged'] = esc_attr( $_POST['page'] );
    $args['post_status'] = 'publish';
    
    add_filter( 'posts_where', 'title_filter', 10, 2 ); 

    ob_start();
    $loop = new WP_Query( $args );
    if( $loop->have_posts() ): while( $loop->have_posts() ):          
        $loop->the_post();
        get_template_part('partials/place-thumbnail');
    endwhile; endif; wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success( $data );
    wp_die();
}
add_action( 'wp_ajax_be_ajax_load_more', 'be_ajax_load_more' );
add_action( 'wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more' );
