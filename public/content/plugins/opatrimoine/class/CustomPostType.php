<?php

namespace OPatrimoine;

class CustomPostType
{
    public $supports = [
        'title',
        'thumbnail',
        'editor',
        'author',
    ];

    public $identifier;
    public $label;
    public $icon;

    public function __construct($identifier, $label, $icon)
    {
        $this->identifier = $identifier;
        $this->label = $label;
        $this->icon = $icon;
        
    }

    public function register()
    {
        $result = register_post_type(
            $this->identifier,
            [
                'label' => $this->label,
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => $this->icon,
                'supports' => $this->supports,
                'capability_type' => $this->identifier,
                'map_meta_cap' => true,
            ],
        );
        
        flush_rewrite_rules();

        return $result;
    }
}