<?php

namespace OPatrimoine\defaultDatas;

class TourThematicsDatas
{
    public $tourThematics = [
        'Noblesse',
        'Renaissance',
        'Moyen-âge',
        'Bande dessinée',
        'Littérature',
        'Préhistoire',
        'Religion',
        'Cinéma',
        'Gare',
        'XIXeme siècle',
        'XVIIIeme siècle',
        'Impressionisme',
        'Peinture',
        'Contemporain',
    ];

    public function getTourThematics()
    {
        return $this->tourThematics;
    }
}