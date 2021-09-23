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
        ],
        [
            'post_title' => 'Un monument',
            'post_content' => 'Le musée d’Orsay, Hic officia aliquam ea dolor dolores ea dolor labore ut incidunt natus et perspiciatis esse. In delectus dolorum qui unde beatae est inventore architecto et vero numquam. A aspernatur error est aliquam aliquid At tenetur sint. Nam explicabo consequatur eum ipsum error qui harum culpa.
            hors Journées du Patrimoine,  à des lieux dont certaines parties sont parfois inaccessibles au public. ',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Monument']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 23 34 54 23',
            'acf-urlsite' => 'https://www.musee-orsay.fr/',
            'acf-address' => '62, rue de Lille
            75007 Paris ',
            'acf-city' => 'Paris',
        ],
        [
            'post_title' => 'Une place',
            'post_content' => 'Le musée d’Orsay, Hic officia aliquam ea dolor dolores ea dolor labore ut incidunt natus et perspiciatis esse. In delectus dolorum qui unde beatae est inventore architecto et vero numquam. A aspernatur error est aliquam aliquid At tenetur sint. Nam explicabo consequatur eum ipsum error qui harum culpa.
            hors Journées du Patrimoine,  à des lieux dont certaines parties sont parfois inaccessibles au public. ',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Place']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 23 34 54 23',
            'acf-urlsite' => 'https://www.musee-orsay.fr/',
            'acf-address' => '62, rue de Lille
            75007 Paris ',
            'acf-city' => 'Paris',
        ],
    ];

    public function getPlaces()
    {
        return $this->places;
    }
}