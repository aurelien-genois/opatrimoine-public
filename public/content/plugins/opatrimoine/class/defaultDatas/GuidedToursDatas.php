<?php

namespace OPatrimoine\defaultDatas;

class GuidedToursDatas
{
    public $placesPostsIds = [];


    public function __construct(array $placesPostsIds)
    {
        $this->placesPostsIds = $placesPostsIds;
    }

    // ! the index of $this->placesPostsIds[0] must not be less than the number of generated places
    public function getGuidedTours()
    {
        return [
            [
                'post_title' => 'Une visite guidée',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/03/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 38,
                'acf-placeoftour' => $this->placesPostsIds[0],
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
                'acf-date' => '10/03/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
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
                'acf-date' => '10/03/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
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
                'acf-date' => '10/02/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
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
                'acf-date' => '10/02/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
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
                'acf-date' => '10/02/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
        ];;
    }
}