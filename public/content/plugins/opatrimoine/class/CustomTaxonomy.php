<?php

namespace OPatrimoine;


class CustomTaxonomy
{
    public $identifier;
    public $label;
    public $hierachical = false;
    public $postTypesList = [];

    public $options = [
        'show_in_rest' => true,
        'public' => true
    ];

    public function __construct($identifier, $label, array $postTypesList, $isHierarchical = false) {
        $this->identifier = $identifier;
        $this->label = $label;
        $this->hierachical = $isHierarchical;
        $this->postTypesList = $postTypesList;
    }

    public function register()
    {
        $options = $this->options;
        $options['label'] = $this->label;
        $options['hierarchical'] = $this->hierachical;
        $options['capabilites'] = [
            'manage_terms' => 'manage_' . $this->identifier,
            'edit_terms' => 'edit_' . $this->identifier,
            'delete_terms' => 'delete_' . $this->identifier,
            'assign_terms' => 'assign_' . $this->identifier,
        ];

        return register_taxonomy(
            $this->identifier,
            $this->postTypesList,
            $options
        );
    }
}