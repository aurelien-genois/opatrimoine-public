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

    // plugin initialization
    public function __construct() 
    {
        
        add_action(
            'init',
            [$this, 'registerCustomPostTypes'],
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

    public function activate()
    {

    }

    public function deactivate()
    {
        
    }
}
