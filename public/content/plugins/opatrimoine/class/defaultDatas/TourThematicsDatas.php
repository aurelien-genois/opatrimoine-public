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
    ];

    public function getTourThematics()
    {
        return $this->tourThematics;
    }
}