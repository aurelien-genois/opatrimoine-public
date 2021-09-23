<?php

namespace OPatrimoine;

use OPatrimoine\defaultDatas\GuidedToursDatas;
use OPatrimoine\defaultDatas\PlacesDatas;
use OPatrimoine\defaultDatas\PlaceTypesDatas;
use OPatrimoine\defaultDatas\TourThematicsDatas;

class Plugin
{    
    // cpt definitions
    public $customPostTypes = [
        'place' => [
            'label' => 'Lieux',
            'icon' => 'dashicons-bank',
            'fields' => [
                ['key' => 'telephone', 'label' => 'Téléphone', 'name' => 'telephone', 'type' => 'text'],
                ['key' => 'urlsite', 'label' => 'URL du site', 'name' => 'urlsite', 'type' => 'url'],
                ['key' => 'address', 'label' => 'Adresse', 'name' => 'address', 'type' => 'text'],
                ['key' => 'city', 'label' => 'Ville', 'name' => 'city', 'type' => 'text'],
                // NTH noter un lieu
                //['key' => 'rating', 'label' => 'Note', 'name' => 'rating', 'type' => 'number'],
            ],
        ],
        'guided-tour' => [
            'label' => 'Visites guidées',
            'icon' => 'dashicons-calendar-alt',
            'fields' => [
                ['key' => 'starthour', 'label' => 'Heure de début', 'name' => 'starthour', 'type' => 'time_picker'],
                ['key' => 'duration', 'label' => 'Duréé estimée', 'name' => 'duration', 'type' => 'text'],
                ['key' => 'totalpersons', 'label' => 'Nombre de personnes totale', 'name' => 'totalpersons', 'type' => 'number'],
            ],
        ],
    ];

    // custom taxonomies definitions
    public $customTaxonomies = [
        'place-type' => [
            'label' => 'Type de lieux',
            'postTypes' => ['place'],
            'hierachical' => false,
        ],
        'inaccessibility' => [
            'label' => 'Inaccessibilité',
            'postTypes' => ['guided-tour'],
            'hierachical' => false,
        ],
        'tour-thematic' => [
            'label' => 'Thématique de visite',
            'postTypes' => ['guided-tour'],
            // NTH True en évolution potentielle
            'hierachical' => false,
        ],
    ];

    // plugin initialization
    public function __construct() 
    {
        
        add_action(
            'init',
            [$this, 'registerCustomPostTypes'],
        );

        add_action(
            'init', // event "initialisation de wp
            [$this, 'registerCustomTaxonomies'],
        );    
    }

    public function registerCustomPostTypes()
    {
        foreach($this->customPostTypes as $identifier => $description) {
            $postType = new CustomPostType(
                $identifier,
                $description['label'],
                $description['icon'],
                $description['fields'],
            );
            $postType->register();
        };
    }

    public function registerCustomTaxonomies()
    {
        foreach($this->customTaxonomies as $identifier => $description) {
            $taxonomy = new CustomTaxonomy(
                $identifier,
                $description['label'],
                $description['postTypes'],
                $description['hierachical']
            );
            $taxonomy->register();
        }
    }

    public function generatePlaceTypes()
    {
        $placeTypesDatas = new PlaceTypesDatas();
        $placeTypes = $placeTypesDatas->getPlaceTypes();

        foreach($placeTypes as $placeType) {
            wp_insert_term($placeType, 'place-type');
        }
    }

    public function generateTourThematics()
    {
        $tourThematicsDatas = new TourThematicsDatas();
        $tourThematics = $tourThematicsDatas->getTourThematics();

        foreach($tourThematics as $tourThematic) {
            wp_insert_term($tourThematic, 'tour-thematic');
        }
    }

    public function generatePlaces()
    {
        $placesDatas = new PlacesDatas();
        $places = $placesDatas->getPlaces();

        foreach($places as $place) {
            $postId = wp_insert_post($place);
            // ACF populate custom fields
            if(function_exists('update_field')) {
                update_field('telephone', $place['acf-telephone'], $postId);
                update_field('urlsite', $place['acf-urlsite'], $postId);
                update_field('address', $place['acf-address'], $postId);
                update_field('city', $place['acf-city'], $postId);
            };
        }
    }

    public function generateGuidedTours()
    {
        $guidedToursDatas = new GuidedToursDatas();
        $guidedTours = $guidedToursDatas->getGuidedTours();

        foreach($guidedTours as $guidedTour) {
            $postId = wp_insert_post($guidedTour);
            // ACF populate custom fields
            if(function_exists('update_field')) {
                update_field('starthour', $guidedTour['acf-starthour'], $postId);
                update_field('duration', $guidedTour['acf-duration'], $postId);
                update_field('totalpersons', $guidedTour['acf-totalpersons'], $postId);
            };
        }
    }

    public function activate()
    {
        $this->registerCustomPostTypes();
        $this->registerCustomTaxonomies();
        $this->generatePlaceTypes();
        $this->generatePlaces();
        $this->generateTourThematics();
        $this->generateGuidedTours();
    }

    public function deactivate()
    {
        
    }
}
