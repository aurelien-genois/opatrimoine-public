<?php

function place_pre_get_posts($query) {

    if($query->is_main_query() && !is_admin() && is_post_type_archive('place')) {
        //$query->set('posts_per_page', 2);

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
    }
}

function title_filter( $where, $wp_query ) {
    global $wpdb;

    if(!$wp_query->is_main_query() || !is_post_type_archive('place')) {
        return;
    }

    if (!empty($_GET['place-name']) )  {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like (( $_GET['place-name'] ) ) . '%\'';
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
    $placesPosts = get_posts(['post_type' => 'place', 'posts_per_page' => -1]);
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