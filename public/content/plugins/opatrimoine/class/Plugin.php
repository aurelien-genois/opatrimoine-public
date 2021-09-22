<?php

namespace OPatrimoine;

class Plugin
{
    // cpt definitions
    public $customPostTypes = [
        'place' => [
            'label' => 'Lieux',
            'icon' => 'dashicons-bank',
        ],
        'guided-tour' => [
            'label' => 'Visites guidées',
            'icon' => 'dashicons-calendar-alt',
        ],
    ];

    public $customTaxonomies = [
        'establishment-type' => [
            'label' => 'Type d\'établissement',
            'postTypes' => ['place'],
            'hierachical' => false,
        ],
        'inaccessibility' => [
            'label' => 'Inaccessibilité',
            'postTypes' => ['guided-tour'],
            'hierachical' => false,
        ],
        'visit-thematic' => [
            'label' => 'Thématique visite',
            'postTypes' => ['guided-tour'],
            'hierachical' => true,
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

    public function activate()
    {

    }

    public function deactivate()
    {
        
    }
}
