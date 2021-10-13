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
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 38,
                'acf-totalreservations' => 2,
                'acf-placeoftour' => $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite 1',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Religion','Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite 2',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Une autre visite 3',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Préhistoire']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Préhistoire','Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Une autre visite 4',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Une autre visite 5',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
        ];;
    }
}