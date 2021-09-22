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

        return register_taxonomy(
            $this->identifier,
            $this->postTypesList,
            $options
        );
    }
}