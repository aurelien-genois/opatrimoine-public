<?php

namespace OPatrimoine\defaultDatas;

class GuidedToursDatas
{
    public $guidedTours = [
        [
            'post_title' => 'Une visite guidée',
            'post_content' => 'Ceci est la description d\'une visite guidée',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'guided-tour',
            'post_status' => 'publish',
            'tax_input' => ['tour-thematic' => ['Renaissance']],
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-starthour' => '01:00:00',
            'acf-duration' => '01:30',
            'acf-totalpersons' => 38,
        ],
        [
            'post_title' => 'Une autre visite',
            'post_content' => 'Ceci est la description d\'une visite guidée',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'guided-tour',
            'post_status' => 'publish',
            'tax_input' => ['tour-thematic' => ['Noblesse']],
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-starthour' => '13:00:00',
            'acf-duration' => '02:00',
            'acf-totalpersons' => 12,
        ],
    ];

    public function getGuidedTours()
    {
        return $this->guidedTours;
    }
}