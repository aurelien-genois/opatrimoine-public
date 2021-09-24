<?php

namespace OPatrimoine\defaultDatas;

class PlacesDatas
{
    // TODO add image url
    // NTH add acf notes
    
    public $places = [
        [
            'post_title' => 'Musée d’Orsay',
            'post_content' => 'Le musée d’Orsay, Hic officia aliquam ea dolor dolores ea dolor labore ut incidunt natus et perspiciatis esse. In delectus dolorum qui unde beatae est inventore architecto et vero numquam. A aspernatur error est aliquam aliquid At tenetur sint. Nam explicabo consequatur eum ipsum error qui harum culpa.
            hors Journées du Patrimoine,  à des lieux dont certaines parties sont parfois inaccessibles au public. ',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Musée']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 23 34 54 23',
            'acf-urlsite' => 'https://www.musee-orsay.fr/',
            'acf-address' => '62, rue de Lille
            75007 Paris ',
            'acf-city' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/04/26/09/27/architecture-3351480_960_720.jpg',
        ],
        [
            'post_title' => 'Un monument inconnu',
            'post_content' => 'Un monument sauvage est apparu en fin septembre à Paris, le mystère reste entier.',
            'post_excerpt' => 'Un monument sauvage est apparu fin septembre à Paris, le mystère reste entier.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Monument']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 23 34 54 23',
            'acf-urlsite' => 'http://www.paris-arc-de-triomphe.fr/Actualites/L-Arc-de-triomphe-Wrapped-Paris-1961-2021',
            'acf-address' => 'Place Charles de Gaulle
            75017 Paris ',
            'acf-city' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2021/09/18/16/05/arc-de-triomphe-6635521_960_720.jpg',
        ],
        [
            'post_title' => 'Place de la concorde',
            'post_content' => 'C\'est la place de la concorde, avec l\'obélisque volé aux égyptien.',
            'post_excerpt' => 'C\'est la place de la concorde, avec l\'obélisque volé aux égyptien.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Place']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '-',
            'acf-urlsite' => 'https://fr.wikipedia.org/wiki/Place_de_la_Concorde',
            'acf-address' => 'Place de la Concorde 75008 Paris ',
            'acf-city' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/11/06/15/02/fontaine-des-mers-3798480_960_720.jpg',
        ],
    ];

    public function getPlaces()
    {
        return $this->places;
    }
}